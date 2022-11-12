<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        $prace = Assignment::get();
        return view('wykladowca_katalog_prac', [
            'prace' => $prace
            ]);
    }
    public function viewOcenianiePrac(){
        return view('wykladowca_ocenianie_prac');
    }
    public function showDomowa(){
        return view('wykladowca_domowa');
    }
}
