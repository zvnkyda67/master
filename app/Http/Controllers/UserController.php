<?php

namespace App\Http\Controllers;

class UserController {
    function __constructor() {
    $users = ['user1'=>'city1','user2'=>'city2','user3'=>'city3','user4'=>'city4','user5'=>'city5'];
    }
    public function show() {
        return 'hello world';
    }
    public function all() {
        return 'all';       
    }
    public function username($username) {
        return "Ваш username"."-".$username;       
    }
    public function surnameUser($surname, $name) {
        return "Ваши Фамилия и Имя"."-".$surname." ".$name;       
    }
}