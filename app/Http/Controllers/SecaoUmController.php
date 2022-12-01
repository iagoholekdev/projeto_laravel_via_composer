<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecaoUmController extends Controller
{
    public function print() {
        return view('site.secao-um');
    }
}
