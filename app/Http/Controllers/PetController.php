<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function pet(){
        $pets=Pet::all();
        return view('backend.pages.Pet',compact('pets'));
    }
    public function petform(){
        
        return view('backend.pages.Petform');
    }
    public function petpost(Request $request){
        Pet::create([
            'pet_type'=>$request->pet_type,
            'age'=>$request->age,
            'life_span'=>$request->life_span,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'breed'=>$request->breed,
            'size'=>$request->size,
            'color'=>$request->color,

        ]);
        return redirect()->back();
             
    }
}