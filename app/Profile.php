<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $guarded = [];

	public function profileImage(){
		$imagePath = ($this->image) ? $this->image : 'profile/DtzevtC07rqgPhT3rjX7eVGFu3TK1R1YH5c1cz1G.png';
		return '/storage/' . $imagePath;
	}

	public function followers(){
	    return $this->belongsToMany(User::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
