<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\House;
use App\CreditType;

class PageController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $houses = House::all();
            $creditTypes = CreditType::all();
            return view('inmuebles')
            ->with('houses',$houses)
            ->with('creditTypes',$creditTypes);
    }
}
