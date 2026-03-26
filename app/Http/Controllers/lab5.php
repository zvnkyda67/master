<?php
namespace App\Http\Controllers;

class lab5 extends Controller{

    public function show()
    {
        return view('lab5.lab5', [
            'name'=>'Dasha',
            'age'=>'20',
            'salary'=>'40000'
        ]);
    }

}