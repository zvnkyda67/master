<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 

	class PostController extends Controller
	{
		public function show()
		{
			DB::enableQueryLog();
			$user2 = DB::table('users1')->where('id','!=', 3)->get();
			$user3 = DB::table('users1')->select('name','email')->get();
			$user4 = DB::table('users1')->select('email as user_email')->get();
			$user5 = DB::table('users1')->where('age','=', 22)->get();

			$users1 = DB::table('users1')->get();

			foreach ($users1 as $user){
				dump($user);
				/* dump($user->email); */
			}
			dump(DB::getQueryLog());
		
			return view('PostController.lab9',[ 
				'users1'=>$users1,
				'user2'=>$user2,
				'user3'=>$user3,
				'user4'=>$user4,
				'user5'=>$user5,
			]); 
			
		}
		 	
	}
?>