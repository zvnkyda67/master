<?php

namespace App\Http\Controllers;

class UserController {
    public $users;

    public function __constructor() {
        $this->users = ['user1'=>'city1','user2'=>'city2','user3'=>'city3','user4'=>'city4','user5'=>'city5'];
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
    public function userCity($user) {
    $this->users = ['user1'=>'city1','user2'=>'city2','user3'=>'city3','user4'=>'city4','user5'=>'city5'];

        dump($user);
        dd($this->users['user2']);
    }

     public function showtest()
		{
			return view('test', ['var1'=>'1', 'var2'=>'2']);
		}

}