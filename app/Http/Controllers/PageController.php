<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showIndex()
    {
        return view('pages.index');
    }

    public function showContacto()
    {
        return view('pages.contacto');
    }

    public function showNosotros()
    {
        return view('pages.nosotros');
    }
}
