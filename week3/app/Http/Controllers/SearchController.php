<?php

namespace App\Http\Controllers;

use App\Models\Search;

class SearchController extends Controller
{
    public function search(){
        
        return view('search', []);
    }
}