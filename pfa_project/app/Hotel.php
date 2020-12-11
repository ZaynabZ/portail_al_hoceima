<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function addFullAdresse($adresse){
    	$this->full_adresse = $adresse;
    	$this->save();
    }

    public function enterDataInDb($data){

    	$this::insert($data);
    	$this->save();
    }
}
