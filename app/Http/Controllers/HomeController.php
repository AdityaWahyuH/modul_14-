<?php

namespace App\Http\Controllers;
use App\Http\Controllers\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}
