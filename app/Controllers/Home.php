<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['html'];
   
    public function index(): string
    {
        
        return view ('landing_page');
        // return view('welcome_message');
    }
}