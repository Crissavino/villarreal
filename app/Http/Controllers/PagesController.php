<?php

namespace App\Http\Controllers;

use App\Mail\ContactoConfirmado;
use App\Mail\ContactoRecibido;
use App\Models\Article;
use App\Models\Contacttype;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function showIndex()
    {
        $articles = Article::where('visible', 1)->orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.index')->with([
            'articles' => $articles,
        ]);
    }

    public function showNosotros()
    {
        return view('pages.nosotros');
    }

    public function showContacto()
    {
        $contactTypes = Contacttype::all();

        return view('pages.contacto')->with(['contactTypes' => $contactTypes]);
    }

    public function sendMailContacto(Request $request)
    {

        $request->validate(
            [
                'name' => 'required | min:3',
                'lastName' => 'required',
                'email' => 'required | email',
//                'tel' => 'required | min:5',
                'motivoConsulta' => 'required',
                'contactType' => 'required | array | min:1',
                'message' => 'required | min:10 | max:10000',
            ],
            [
                'name.required' => 'Tenes que ingresar tu nombre',
                'name.min' => 'El nombre debe tener como mínimo 3 letras',
                'lastName.required' => 'Tenes que ingresar tu apellido',
                'email.required' => 'Tenes que ingresar tu email',
//                'tel.required' => 'Tenes que ingresar tu telefono si es un producto nuevo',
                'motivoConsulta.required' => 'Tenes que elegir un motivo de la consulta',
                'contactType.required' => 'Tenes que seleccionar el tipo de la consulta',
                'contactType.min' => 'Tenes que seleccionar como mínimo un tipo de consulta',
                'message.required' => 'Tenes que ingresar un mensaje',
                'message.min' => 'El mensaje debe tener como mínimo 10 letras',
                'message.max' => 'El mensaje puede tener como máximo 10000 letras',
            ]);

        $nameTo = $request->name;
        $lastNameTo = $request->lastName;
        $fullName = $nameTo.' '.$lastNameTo;
        $contactEmail = $request->email;
        $contactTel = $request->tel;
        $motivoConsulta = $request->motivoConsulta;
        $tipoContacto = $request->contactType;
        $message = $request->message;

        Mail::to(config('mail.from.address'))->send(new ContactoRecibido($fullName, $message, $contactTel,
            $motivoConsulta, $tipoContacto));

        if (isset($contactEmail)) {
            Mail::to($contactEmail)->send(new ContactoConfirmado($fullName));
        }

        return redirect()->route('index')->with('success', 'Contacto realizado');
    }

    public function showPerfil(Request $request)
    {
        return view('pages.perfil', ['user' => auth()->user()]);
    }

    public function showBlog(Request $request)
    {

        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        $tags = Tag::all();

        if ($request->tagTitle) {
            $selectedTag = Tag::where('title', $request->tagTitle)->first();
            $articles = $selectedTag->articles()->paginate(5);
        }

        return view('pages.blog')->with([
            'articles' => $articles,
            'tags'     => $tags,
        ]);
    }

    public function showArticle(Request $request)
    {
        $article = Article::find($request->id);

        return view('pages.article')->with([
            'article' => $article,
        ]);

    }

}
