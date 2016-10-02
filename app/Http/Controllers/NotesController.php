<?php

namespace App\Http\Controllers;

// importing the classes that we can use which aren't part of our namespace

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Card;
use App\Note;

class NotesController extends Controller
{
	// type hint request so laravel automatically passes it through for us
    // public function store(Request $request) 
    // {
    // 	return $request->all();	
    // }
    // implicit model binding for card since it's passed in the route
    public function store(Request $request, Card $card) 
    {
        // laravel will automiatcally perform the validation against the $request with the rules array given. if it fails an exception will be thrown and laravel then catches it for you.
        $this->validate($request, [
            'body' => 'required'
            ]);
    	// request()->all() returns type array of the request object 
    	// e.g. ['id' => 1, 'body' => 'some body']

        if (count($card->notes) > 10)
        {
            return \Redirect::back()->withErrors(['Sorry! There are currently too many notes.', 'Try coming back later when they\'ve been cleaned up!']);
        }

    	$temp_request = request()->all();
    	$note = new Note;
    	$note->body = $temp_request['body'];
        $note->user_id = 1; //hard code user id

    	// saving the new note to the note that we have from the route
    	// notes() returns the collection of notes associated with the card, and then save will save a new note which has the value of the argument passed ($note) 
    	$card->notes()->save($note);

    	// we're done so we can just redirect back
    	// return redirect('/Some/Place');
    	return back();

    	// helper function to return the entirity of the request
    	// return request()->all();

    	// another way to return the entirity of the request
    	// return \Request::all();
    }

    // we get the note object because we're using route model binding
    // therefore, Note $note === {note}.
    // edit action which displays the form to edit the resource
    public function edit(Note $note) 
    {
    	return view('notes.edit', compact('note'));
    }

    // then when submitted the form we should trigger an update method which actually updates the form in the database
    // going to use the illuminate request type hinting way to let laravel give us the request info as a method parameter.
    // method injection: if you type hint a variable within a controller action then laravel is going to do its best to automatically inject that for you
    // $request = request info from form
    // $note = the note instance from wildcard {note}
    public function update(Request $request, Note $note) 
    {
    	// fetch all form data from form
    	$form_data = $request->all();
    	$note->update($form_data);

    	return back();
    }
}
