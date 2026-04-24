<?php

namespace App\Http\Controllers;

use App\Models\lab10;

class lab10COntroller extends Controller
{
   public function getAll() {
    $postShow = lab10::all();
   }
}