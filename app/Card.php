<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	// we reference this function in an odd way. you tend not to call it with the paranthesis since you can treat it as a collection. e.g. $card->notes, $card->notes[0], $card->notes->first(), etc
    public function notes() 
    {
    	// may note be true: this function will return the notes associated with the card
    	
        // $this->hasMany('App\Note') is saying that 
    	// Card ($this) has a 'has many' relationship with Notes ('App\Note')
    	// can also use Note::class as opposed to App\Note

        // card has many notes
    	return $this->hasMany('App\Note');	
    }

    public function path() 
    {
    	return '/cards/' . $this->id;
    }
}
