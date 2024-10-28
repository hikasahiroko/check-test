<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'select','content']);
        return view('confirm', compact('contact'));
    }
    public function store()
    {
        return view('thanks');//表示のためだけに入れたので後で修正すること
    }
}

