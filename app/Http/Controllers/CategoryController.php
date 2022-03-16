<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function PetCategory(){
        $categories=Category::all();
        return view('backend.pages.PetCategory',compact('categories'));
    }
}
