<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(){
        return view('categoriesIndex');
    }

    public function accesorios(){
        return view('categoriesAccesorios');
    }
    
    public function hogar(){
        return view('categoriesHogar');
    }

    public function camaras(){
        return view('categoriesCamaras');
    }

    public function impresoras(){
        return view('categoriesImpresoras');
    }

}
