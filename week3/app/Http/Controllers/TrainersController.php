<?php

namespace App\Http\Controllers;

use App\Models\Trainers;

class TrainersController extends Controller
{
    public function trainers(){
        
        $trainers = Trainers::paginate(10);
        return view('trainers', ['trainers' => $trainers]);
    }
}