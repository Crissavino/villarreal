<?php

namespace App\Http\Controllers;

use App\Mail\RecibirContacto;
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
        $emailTo = $request->email;
        $message = $request->message;

//        $dataWhoSend = [
//            'name' => 'Cristian',
//            'body' => 'Enseguida nos pondremos en contacto'
//        ];
//
//        Mail::send('emails.mailContacto', $dataWhoSend, function ($mess) use ($fullName, $emailTo, $message) {
//            $mess->to($emailTo, $fullName)
//                ->subject('Contacto EJI Villarreal');
//
//            $mess->from('savinocristian89@gmail.com', 'Test email');
//        });

        Mail::to($emailTo)->send(new RecibirContacto($fullName, $message));

        return redirect()->route('index')->with('success', 'Contacto realizado');
    }
}
