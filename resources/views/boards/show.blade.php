@extends('layouts.master')

@section('title')
    Show Board
@endsection

@section('content')
    <p>Show Board</p>
    <p>제목 : {{$board -> title}}</p>
    <p>내용 : {{$board -> story}}</p>
@endsection