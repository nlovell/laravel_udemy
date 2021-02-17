<?php

namespace App\Http\Controllers;

use App\Models\User;


class PageController extends Controller
{
    public function about()
    {
        return "About Us Page";
    }

    public function contactPost()
    {
        return "Submitted Contact form";
    }

    public function profile($id)
    {
        $user = User::with(['questions', 'answers', 'answers.question'])->findOrFail($id);
        return view('profile')->with('user', $user);
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {

    }
}
