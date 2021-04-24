<?php

namespace App\Http\Controllers;

use App\Models\Companies;

class CompaniesController extends Controller
{
    public function companies(){
        $obj = new Companies();
        $companies = $obj->paginate(10);
        return view('companies', ['companies' => $companies]);
    }
}