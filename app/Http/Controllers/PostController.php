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
	}
?>