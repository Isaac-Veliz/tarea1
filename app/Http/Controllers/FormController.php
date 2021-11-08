<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('tablas');
    }
    
    public function create(){
        //return view('Cliente.create');
    }

    public function store(Request $request){
    }

    public function edit($id){
        //return view('Cliente.edit');
    }

    public function update(Request $req,$id ){
    }
}
