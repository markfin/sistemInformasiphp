<?php

namespace App\Controllers;

class Home extends BaseController
{
    // protected $helpers = ['html'];
   
    // public function index(): string
    // {
    //     $data = [
    //         'title'=>'marfin'
    //     ];
    //     return view ('template/landing_page', $data);
    //     // return view('welcome_message');
    // }
    public function index()
    {
        // return view('welcome_message');
        $data = [
            'nama' => 'Home',
            'isi' => 'v_home'
        ];
       
        return view ('layout/v_wrapper', $data);
    }
    public function guru(){
        $data = [
            'nama' => 'Guru',
            'isi' => 'daftar/v_guru'
        ];
       
        return view ('layout/v_wrapper', $data);
    }
    public function murid(){
        $data = [
            'nama' => 'Murid',
            'isi' => 'daftar/v_murid'
        ];
       
        return view ('layout/v_wrapper', $data);
    }
    

  
}