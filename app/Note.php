<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // only thing we're allowing to be mass assigned is the body attribute
    protected $fillable = ['body'];

    public function card()
    {
        // can also use Card::class as opposed to App\Card
        return $this->belongsTo('App\Card');
    }
    public function user()
    {
    	// var_dump(User::class);
    	// when called lets laravel know that this note has a user it belongs to 
    	// User::class == App\User
        return $this->belongsTo(User::class);
    }
}
