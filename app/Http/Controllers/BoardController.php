<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index(){
        $boards = Board::all();
        return view('boards.index',compact('boards'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $board = Board::create([
            'title' => $request->input('title'),
            'story' => $request->input('story')
        ]);
        return redirect('/boards/'.$board->id);
    }

    public function show(Board $board){
        return view('boards.show',compact('board'));
    }

    public function edit(Board $board){
        return view('boards.edit',compact('board'));
    }

    public function update(Board $board){
        $board->update(request(['title', 'story']));
        return redirect('/boards/'.$board->id);
    }
}
