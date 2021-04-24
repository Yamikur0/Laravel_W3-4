<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainers;

class SearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('searchinput');
    
        // Search in the title and body columns from the posts table
        $trainers = Trainers::where('trainer_id', 'LIKE', "%{$search}%")
            ->orwhere('trainer_name', 'LIKE', "%{$search}%")
            ->orWhere('trainer_email', 'LIKE', "%{$search}%")
            ->orWhere('trainer_phone', 'LIKE', "%{$search}%")
            ->paginate(10);
           
        // Return the search view with the resluts compacted
        return view('search', ['trainers' => $trainers, 'search'=>$search]);
    }
}