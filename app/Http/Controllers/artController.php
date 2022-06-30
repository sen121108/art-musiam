<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ArtRequest;
use App\art;

class artController extends Controller
{
    public function index(art $art) {
        return view('index')->with(['arts' => $art->getPaginateByLimit()]);
    }
    
     public function explain(art $art) {
        return view('explain')->with(['art' => $art]);
    }
    
    
    
     public function manage() {
        return view('manage');
    }
    
    // public function manageView(){
    //     return view('manageView');
    // }
    
     public function posts(ArtRequest $request ,art $art) {
        $input = $request['art'];
        $art->fill($input)->save();
        
        $image = $request->file('art.image')->storeAs('public/images',$art->id.'post.jpeg' );
        
       
        return redirect('/manage/');
    }
    
}
