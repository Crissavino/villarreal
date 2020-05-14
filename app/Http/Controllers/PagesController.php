<?php

namespace App\Http\Controllers;

use App\Mail\ContactoConfirmado;
use App\Mail\ContactoRecibido;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function showIndex()
    {
        $articles = Article::where('visible', 1)->orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.index')->with([
            'articles' => $articles
        ]);
    }

    public function showNosotros()
    {
        return view('pages.nosotros');
    }

    public function showContacto()
    {
        return view('pages.contacto');
    }

    public function sendMailContacto(Request $request)
    {
        $nameTo = $request->name;
        $lastNameTo = $request->lastName;
        $fullName = $nameTo . ' ' . $lastNameTo;
        $contactEmail = $request->email;
        $contactTel = $request->tel;
        $message = $request->message;

        Mail::to(config('mail.from.address'))->send(new ContactoRecibido($fullName, $message, $contactTel));

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
            'tags' => $tags,
        ]);
    }

    public function showArticle(Request $request)
    {
        $article = Article::find($request->id);

        return view('pages.article')->with([
            'article' => $article
        ]);

    }

}
