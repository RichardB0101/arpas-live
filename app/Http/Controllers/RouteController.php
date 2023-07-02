<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function viewOcenianiePrac(Request $request){
        $prace = Assignment::get()->find($request->assignmentId);
        return view('wykladowca_ocenianie_prac', [
            'prace' => $prace,
        ]);
    }
    public function showDomowa(){
        $studentsCount = Assignment::distinct('author_name')->count();
        $assignmentsToCheckCount = Assignment::where('grade', '=', 0)->count();;
        $notPassCount = Assignment::where('grade', '>=', 4)->count();
        $passCount = Assignment::where('grade', '<=', 4)->count();

//        dd($studCount);
        return view('strona_domowa', [
            'dashboardData' => compact('studentsCount', 'assignmentsToCheckCount', 'notPassCount', 'passCount')
        ]);
    }

    public function showProfil(){
        $assignments = Assignment::where('author_name', '=', Auth::user()->name)->latest()->limit(5)->get();
        return view('profil', compact('assignments'));

    }

    public function showDodaniePrac(){
        $prace = Assignment::get();
        return view('student_dodanie_prac', [
            'prace' => $prace,
        ]);
    }
    public function dodaniePracDoBazyDanych(Request $request){
        $prace = new Assignment;
        $prace->author_name = $request-> author;
        $prace->title = $request-> title;
        $prace->author_kierunek = 'Informatyka';
        $prace->description = $request-> description;
        $prace->author_id = $request-> author_id;
        $prace->save();

        return redirect()->route('domowa');
    }

    public function ocenianiePracDoBazyDanych(Request $request){
        $prace = Assignment::find($request->assignment_id);
        $prace->grade = intval($request->grade);
        $prace->save();
        return redirect()->route('domowa');
    }

}
