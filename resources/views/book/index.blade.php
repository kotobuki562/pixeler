<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/book') }}">Book</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

@extends('book/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">書籍一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
      @foreach($books as $book)
      
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $book->name }}</h5>
          <p class="card-text">{{ $book->price }}</p>
          <p class="card-text">{{ $book->author }}</p>
          <a class="btn btn-primary" href="/book/{{ $book->id }}/edit">{{ $book->id }}</a>
          <form action="/book/{{ $book->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </div>
      </div>

      @endforeach
    <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>