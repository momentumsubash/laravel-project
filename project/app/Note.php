<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	//
	public function cards(){
		$return $this->belongsTo('\App\Card');
	}

}
