<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function print() {
      return view('site.sobrenos');
    
    }
}
