<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    //default pages
    public function index()
    {

        return view('pages.index');
    }


    public function about()
    {
        $first = 'fox';
        return view('pages.about',compact('first'));
    }


    public function contact()
    {
        return view('pages.contact');
    }

}
