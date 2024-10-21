<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloAction()
    {
        return view('hello', 
        ['name' => 'Omar', 'age' => '25', 'books' => ['html', 'css', 'js']]);
    }
    public function helloAction2()
    {
        return "Welcome back";
    }
    // what is 
}
