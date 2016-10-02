<?php

// think of a namespace as a folder structure. we're saying that CardsController is really at App\Http\Controllers\CardsController. Therefore whatever we reference inside of this class it will assume we're referencing something which is inside this folder structure (e.g. in this case inside this class or the superclass it inherits from)
namespace App\Http\Controllers;

// use DB so we can make a call to the DB class
// use DB;

use App\Card;

use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{

    // public function __construct()
    // {
    //     // must be admin to visit the cards controller
    //    // $this->middleware('admin'); 
    //     var_dump("constructor called");
    // }

    public function index() 
    {
    	// raw php query builder approach
    	// $cards = DB::table('cards')->get(); 

    	// eloquent approach
    	$cards = Card::all();
    	return view('cards.index', compact('cards'));	
    }

    // public function show($id)
    // type hint card so to let laravel to know what type of instance to expect (Card) 
    // tells laravel to go behind the scenes and look up a Card with the id of card. Wildcard name in routes (web.php) must have the same name as the variable name.
    public function show(Card $card) 
    {
        // eager load 
        // so fetch the notes associated with the card instance
        // also load the user relationship ontop of that
        // $card = Card::with('notes.user')->find(1);

        // card eagerloads user
        // var_dump($card);
        
        // loads to the $card instance the user associated with the notes on this card
        $card->load('notes.user');

   
    	// $card = Card::find($id);

    	return view('cards.show', compact('card'));
    	// return $card;
    }

    
}
