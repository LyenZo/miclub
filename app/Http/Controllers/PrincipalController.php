<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function __invoke(){
        return "Esta va a ser la pagina principal";
    }
}
