<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryView(){

        return view('backend.admin.category');
    }

    public function CategoryStore(Request $request){

        
    }
}
