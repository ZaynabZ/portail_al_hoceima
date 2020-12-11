<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function addCategory($category){
    	$this->category = $category;
    	$this->save();
    }
}
