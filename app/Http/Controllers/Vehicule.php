<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vehicule extends Controller{

    public function show(Request $request){
        $VEHId = null;
        if(isset($request->Vehicule)) {
            $Vehicule = \App\Models\vehicule::where('VEHId', $request->Vehicule)->get();
        } else {
            $Vehicule = \App\Models\vehicule::all();
        }
        return view("vehicule",["vehicule"=>$Vehicule]);
    }
}