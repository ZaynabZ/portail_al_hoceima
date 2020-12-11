<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller{
	
	public function searchHotels(Request $request){

		$location = $request->input('location');
		$min_price = $request->input('min_price');
		$max_price = $request->input('max_price');
		
		if($location == ''){
			$hotel = Hotel::whereBetween('prix_moyen', [$min_price, $max_price])
				->get();
		}
		else{

			$hotel = Hotel::where('short_adresse', $location)
					->whereBetween('prix_moyen', [$min_price, $max_price])
					->get();
		}

		return view('hotels',[
			'hotels' => $hotel
		]);

	}

	public function showAllHotels(Request $request){

			return view('hotels', [
				'hotels' => Hotel::orderBy('nom')->get()
		]);			

	}

	public function showSingleHotel($slug){

		$hotel = Hotel::where('slug', $slug)->first();
		$paginate = Hotel::paginate(3);

		 if(!$hotel){
		 	abort(404);
		 }

		 return view('single_hotel', [
		 	'hotel' => $hotel ,
		 	'paginate' => $paginate
		 ]);
	}

	
}


