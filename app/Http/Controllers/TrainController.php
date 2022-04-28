<?php

namespace App\Http\Controllers;

use App\models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
