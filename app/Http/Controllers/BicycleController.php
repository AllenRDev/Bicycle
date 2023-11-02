<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BicycleController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
