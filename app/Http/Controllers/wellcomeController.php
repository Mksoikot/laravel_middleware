<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class wellcomeController extends Controller
{
    function __construct()
    {
        $this->Middleware('demo');
    }

    function wellcomePage(){
        return view('welcome');
    }
}