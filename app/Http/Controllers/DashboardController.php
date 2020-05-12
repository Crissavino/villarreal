<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\Tag;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showIndex()
    {
        return view('dashboard.dashboard');
    }

    public function showUsers()
    {
        return view('dashboard.user');
    }

    public function showBlog()
    {
//        return view('dashboard.pages.blog');
    }

    public function addArticle()
    {
        $creators = Creator::all();
        $tags = Tag::all();

        return view('dashboard.pages.blog', [
            'creators' => $creators,
            'tags' => $tags
        ]);
    }

    public function storeArticle(Request $request)
    {
        dd($request->all());
    }
}
