<?php
namespace App\Http\Controllers;

class lab5 extends Controller{

    public function show()
    {
        return view('lab5.lab5', [
            'name'=>'Dasha',
            'age'=>'20',
            'salary'=>'40000',
            'class'=>'body',
            'var'=>'german',
            'var1'=>'german1',
            'var2'=>'german2',
            'color'=>'color:red;',
            'silka'=>'http://prof.ru/index.php',
            'text'=>'Ссылка на prof.ru',
            'arr'=>['name'=>'Sawa', 'age'=>'21','salary'=>'200000'],
            'arr2'=>[1,2,3,4,5],
            'city'=>'',
            'location'=>['country'=>'', 'city1'=>'']
        ]);
    }

}