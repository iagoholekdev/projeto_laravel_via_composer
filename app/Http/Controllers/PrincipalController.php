<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function print() {
        echo 'Ola, seja bem vindo ao site!';
    }
}
