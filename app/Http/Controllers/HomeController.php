<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = DB::table('categories')->get(); //qeury builder

        $allCategories = Category::all(); 

        return view('home', ['categories' => $allCategories]);
    }
}
