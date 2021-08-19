<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index(){
        return view('boards.index');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $board = Board::create([
            'title' => $request->input('title'),
            'story' => $request->input('story')
        ]);
        return redirect('/boards');
    }

}
