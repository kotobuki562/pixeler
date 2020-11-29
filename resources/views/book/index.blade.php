<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

@extends('book/layout')
@section('content')
<div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a class="btn btn-primary" href="{{ url('/home') }}" role="button">Home</a>
            <a class="btn btn-primary" href="{{ url('/book') }}" role="button">Book</a>
            <a href="/book/create" class="btn btn-default"><button type="button" class="btn btn-info">新規作成</button></a>
            @else
            <a class="btn btn-primary" href="{{ route('login') }}" role="button">Book</a>
                @if (Route::has('register'))
                <a class="btn btn-primary" href="{{ route('register') }}" role="button">Book</a>
                @endif
            @endauth
        </div>
      @endif
      <h3 class="ops-title">書籍一覧</h3>
    </div>
  </div>
<div class="row">
  <div class="contents col-md-11 col-md-offset-1">
      @foreach($books as $book)

      <div class="card text-center">
        <div class="card-header">
          {{ $book->title }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $book->title }}</h5>
          <p class="card-text">{{ $book->impressions }}</p>
          <a class="btn btn-primary" href="/book/{{ $book->id }}/edit">{{ $book->id }}</a>
        </div>
        <div class="card-footer text-muted">
          <form action="/book/{{ $book->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除<span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </div>
      </div>

      @endforeach
  </div>
</div>
