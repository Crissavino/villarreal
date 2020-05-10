<?php

namespace App\Http\Controllers;

use App\Mail\ContactoConfirmado;
use App\Mail\ContactoRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function showIndex()
    {
        return view('pages.index');
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
}
