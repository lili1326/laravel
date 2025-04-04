<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonController extends Controller
{
   // public function greetings() {
   //     return '<header>Bienvenue chez toi !!!</header>';
  //  }
    
  public function greetings(string $name) {
	return '<header>Bienvenue chez toi : '.$name.' !!! </header>';
}
}