<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index(){
        return view('home', [
            "title"=>"Home"
        ]);
    }

    public function home(){
        return view('home',[
            "title" => "Home"
        ]);
    }

    public function profil(){
        return view('profil',[
            "title" => "Profil"
        ]);
    }

    public function Portofolio(){
        return view('portofolio', [
            "title" => "Portofolio"
        ]);
    }
}
