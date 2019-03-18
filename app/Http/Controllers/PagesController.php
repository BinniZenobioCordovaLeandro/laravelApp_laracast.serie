<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('welcome')->with([
        'foo' => 'fool',
        'tasks' => ['a','b','c']
      ]);
    }
    public function about(){
      return view('about');
    }
    public function contact(){
      return view('contact');
    }
}
