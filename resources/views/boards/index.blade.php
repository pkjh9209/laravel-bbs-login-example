@extends('layouts.master')

@section('title')
    Board Index
@endsection

@section('content')
    <p>Board Index</p>
    @foreach ($boards as $item)
      <a href="/boards/{{$item->id}}">Title : {{$item->title}}</a><br>
    @endforeach

@endsection