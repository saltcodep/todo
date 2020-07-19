<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('create', $data);
    }

    public function login()
    {
        return view('login');
    }
}
