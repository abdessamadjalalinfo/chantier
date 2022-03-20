<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Centre;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
       
        return view('welcome');
    }
   
}
