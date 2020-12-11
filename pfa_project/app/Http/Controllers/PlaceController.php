<?php

namespace App\Http\Controllers;
use App\Place;

use Illuminate\Http\Request;

class PlaceController extends Controller
{

	public function searchPlaces(Request $request){

		$location = $request->input('location');

		if($location == ''){

			showAllPlaces();
		}

		else{

			$places = Place::where('location', $location)
						->orderBy('nom')
						->get();

			return view('places', [
				'places' => $places
			]);
		}
	}

    public function showAllPlaces(){

    	return view('places', [
				'places' => Place::orderBy('nom')->get()
		]);			

    }

    public function showSinglePlace($slug){

    	$place = Place::where('slug', $slug)->first();

		 if(!$place){
		 	abort(404);
		 }

		 return view('single_place', [
		 	'place' => $place
		 ]);
    }
}
