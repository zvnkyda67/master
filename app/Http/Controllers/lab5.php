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
            'location'=>['country'=>'', 'city1'=>''],
            'year'=>'',
            'month'=>'04',
            'day'=>'07',
            'str'=>'<b>text</b>',
            'age1'=>'18',
            'isVzrosli'=>false,
            'numbers'=>[1,2,3],
            'stroki'=>['one', 'two', 'three'],
            'num'=>[1,2,3,4,5,6],
            'data'=>[1,2,3],
            'users'=>[['name'=>'user', 'age'=>21], ['name'=>'user2', 'age'=>22]],
            'employees'=>[
            [
                'name'=>'user1',
                'surname'=>'surname1',
                'salary'=>1000,
            ],
            [
                'name'=>'user2',
                'surname'=>'surname2',
                'salary'=>2000,
            ],
            [
                'name'=>'user3',
                'surname'=>'surname3',
                'salary'=>3000,
            ],
            ],
            'mas'=>['dawa','sawa','mawa'],
            'stroki2'=>['str','str1','str2'],
            'intMas'=>[1,2,3,4,5,6],
            'mas1'=>[1,2,3,4,5,0,6,4,2],
        ]);
    }

}