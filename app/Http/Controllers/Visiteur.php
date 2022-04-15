<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Visiteur extends Controller{

    public function show(Request $request){
        $VISITId = null;
        if(isset($request->Visiteur)) {
            $Visiteur = \App\Models\visiteur::where('VISITId', $request->Visiteur)->get();
        } else {
            $Visiteur = \App\Models\visiteur::all();
        }
        return view("visiteur",["visiteur"=>$Visiteur]);
    }

}