<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function parceiros(){
        return view('parceiros');
    }

    public function orcamentos(){
        return view('orcamentos');
    }

}
