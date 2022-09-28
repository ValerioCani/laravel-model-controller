<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
       $movies = Movie::all();
       
       var_dump($movies);

       die();

       return view('movies_list');
    }
}
