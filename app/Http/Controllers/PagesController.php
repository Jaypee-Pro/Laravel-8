<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function display($id){
        $title = 'Hello World!.';
        return view('pages.display',compact('title'));
    }
}
