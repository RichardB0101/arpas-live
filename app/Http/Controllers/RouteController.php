<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        $prace = Assignment::get();
        $status = [
            'success' => 'Zatwierdzone',
            'danger' => 'Niezaliczone',
            'secondary' => 'Do oceny'
        ];
        return view('wykladowca_katalog_prac', [
            'prace' => $prace,
            'status' => $status
            ]);
    }
    public function viewOcenianiePrac(){
        $prace = Assignment::get();
        return view('wykladowca_ocenianie_prac', [
            'prace' => $prace,
        ]);
    }
    public function showDomowa(){
        return view('wykladowca_domowa');
    }

    public function showProfil(){
        return view('profil');
    }
}
