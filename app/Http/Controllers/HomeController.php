<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory 
    {       
        return view('welcome');
    }
}
