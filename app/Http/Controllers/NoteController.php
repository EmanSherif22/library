<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use Auth;

class NoteController extends Controller
{
     function notes(){
        
        return view('notes/create');
    }
    function savenote(Request $request)
    {
        $note=new Note();
        $note->content=$request->content;
        $note->user_id=Auth::user()->id;
        $note->save();   
        return redirect('/users/notes');
    }

}
