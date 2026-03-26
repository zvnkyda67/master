<?php
namespace App\Http\Controllers;

	class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
                'title'=>'site.com',
                'text'=>'page content',
            ]);
		}

		public function showUser() 
		{
			return view('users.show', [
				'title'=>'myspace',
				'name'=>'Ivan',
				'surname'=>'Ivanov'
			]);
		}
	}
?>