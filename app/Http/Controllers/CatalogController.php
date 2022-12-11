<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index()
    {
        $catalogs = Catalog::get();
        return view('wykladowca_katalogi_prac', [
            'catalogs' => $catalogs
        ]);

    }

    public function make(Request $request){

        $catalog = new Catalog;
        $catalog->name = $request-> catalogName;
        $catalog->save();
        return redirect()->route('wykladowca.katalogi_prac');
    }

    public function delete($id)
    {
        $catalog  = Catalog::find($id);
        $catalog->delete($id);
        return redirect()->route('wykladowca.katalogi_prac');
    }
}
