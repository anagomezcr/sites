<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(PostRequest $request)  //reques se encarga de tener todos los datos del formulario 
    {
        //validacion
        dd($request->all());
    }
}
