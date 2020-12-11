<?php

namespace App\Http\Controllers;
use DB;

class PostsController extends Controller{

	public function show($slug){

		 $greet = DB::table('greetings')->where('slug', $slug)->first();

		 if(!$greet){
		 	return "The requested page is not found!";
		 }

		 return view('greet', [
		 	'greet' => $greet
		 ]);

	}
}