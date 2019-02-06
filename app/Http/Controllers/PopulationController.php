<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Product;

class PopulationController extends Controller
{
    public function index()
    {
        //$registros = Product::all();
        return view('Admin.Registros.A14_index');
    }

    public function create()
    {
        return view('Admin.Registros.A14_create');
    }

    public function store()
    {

    }
}
