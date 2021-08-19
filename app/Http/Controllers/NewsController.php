<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function news(){
        // 엘로퀀트 쿼리 호출
        $News = News::all();
        return view('news',compact('News'));
    }

}
