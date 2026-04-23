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
			$user6 = DB::table('users1')->where('age','!=', 22)->get();
			$user7 = DB::table('users1')->where('age','>', 22)->get();
			$user8 = DB::table('users1')->where('age','<', 22)->get();
			$user9 = DB::table('users1')->where('age','<=', 22)->get();
			$user9 = DB::table('users1')->whereBetween('age',[20,23])->get();
			$user10 = DB::table('users1')->where('id','>',4)->orWhere('age','=',30)->get();
			$user11 = DB::table('users1')->whereAgeOrSalary(30,500)->orWhere('id','>',4)->get();
			$user12 = DB::table('users1')->where('salary','=',50)->orWhereBetween('age',[20,30])->get();
			$user13 = DB::table('users1')->whereBetween('salary',[400,2500])->orWhereBetween('age',[20,30])->get();
			$user14 = DB::table('users1')->where('id','=', 3)->first();
			$user15 = DB::table('users1')->where('id','=', 3)->first();
			$user22 = DB::table('users1')->pluck('name');
			$user23 = DB::table('users1')->whereBetween('age',[30,40])->get();
			$user24 = DB::table('users1')->whereNotBetween('age',[30,40])->get();
			$user26 = DB::table('users1')->whereIn('id',[1,2,3,5])->get();
			$user27 = DB::table('users1')->whereNotIn('id',[1,2,3,5])->get();
			$user28 = DB::table('users1')->where('name','=','Ivan1')->get();
			$user29 = DB::table('users1')->where('email','=','ivan@gmail.com')->get();
			$user33 = DB::table('users1')->orderBy('age')->get();
			$user34 = DB::table('users1')->orderBy('salary','desc')->get();
			$user35 = DB::table('users1')->oldest('create_at')->get();
			$user40 = DB::table('users1')->inRandomOrder()->get();
			$user41 = DB::table('users1')->inRandomOrder()->take(1)->get();
			$user42 = DB::table('users1')->whereBetween('age',[20,30])->inRandomOrder()->take(1)->get();


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
				'user6'=>$user6,
				'user7'=>$user7,
				'user8'=>$user8,
				'user9'=>$user9,
				'user10'=>$user10,
				'user11'=>$user11,
				'user12'=>$user12,
				'user13'=>$user13,
				'user14'=>$user14,
				'user15'=>$user15,
				'user22'=>$user22,
				'user23'=>$user23,
				'user24'=>$user24,
				'user26'=>$user26,
				'user27'=>$user27,
				'user28'=>$user28,
				'user29'=>$user29,
				'user33'=>$user33,
				'user34'=>$user34,
				'user35'=>$user35,
				'user40'=>$user40,
				'user41'=>$user41,
				'user42'=>$user42,
			]); 
			
		}
		 	
	}
?>