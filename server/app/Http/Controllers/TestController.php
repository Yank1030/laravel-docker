<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index ()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは'];

        return view('index', compact('hello', 'hello_array'));
    }
}
