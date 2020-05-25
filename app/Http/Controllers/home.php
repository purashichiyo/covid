<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class home extends Controller
{
    //

    public function index(){
        $response = Http::get('api.kawalcorona.com/indonesia');
        $jsonData = $response->json();

        return view('home', compact('jsonData'));
    }

}
