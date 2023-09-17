<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//import model
use App\Models\Train;


class TrainController extends Controller
{
    public function index()
{
    $trains = Train::all(); 
    return view('home', ['trains' => $trains]); 
    return view('contact', ['trains' => $trains]); 
}
}
