<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\lab10;


class lab10Controller extends Controller
{
   public function getAll() {
      $table = lab10::all('id', 'title', 'slug');
      $table = DB::table('posts')->select('id', 'title', 'slug')->whereIn('id',[1,2,3,5])->get();

      return view('lab10Controller.lab10', [
         'table' => $table,



         ]);
   }
}