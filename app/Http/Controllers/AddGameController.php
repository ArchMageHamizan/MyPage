<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class AddGameController extends Controller
{
    function addGame(Request  $req){
        $req->validate([
            'names'=>'required | min:1' ,
            'date'=>'required | min:1' ,
            'star'=>'required | min:1' ,
            'category'=>'required | min:1' 
        ]);
        
        $data=$req->input('names');// accept only email data key.
        $req->session()->flash('game_name',$data);//use flash session



        //save into table 'games' in 'myPort' database
        $Game=new Game;
        $Game->names=$req->names;
        $Game->date=$req->date;
        $Game->star=$req->star;
        $Game->category_id=$req->category;
        $Game->save();

        return redirect('addGame');
        

    }
}
