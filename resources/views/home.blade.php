@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="/svg/user.png" alt="A user image">
    </div>

    <div class="col-9 pt-5">
      <div>
        <h1>{{$user -> username}}</h1>
      </div>

      <div class="d-flex">
        <div class="pr-5"><strong>9</strong> books</div>
        <div class="pr-5"><strong>553</strong> followers</div>
        <div class="pr-5"><strong>100</strong> following</div>
      </div>


      <div class="font-weight-bold">{{$user->profile->title}}</div>
      <div>{{$user->profile->description}}</div>
      <div><a href="http://" target="_blank" rel="noopener noreferrer">{{$user->profile->url ?? 'website.url'}}</a>
      </div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
      <img
        src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>
    <div class="col-4 pb-4">
      <img
        src="https://images.unsplash.com/photo-1544716278-e513176f20b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>
    <div class="col-4 pb-4">
      <img
        src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>

    <div class="col-4 pb-4">
      <img
        src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>
    <div class="col-4 pb-4">
      <img
        src="https://images.unsplash.com/photo-1544716278-e513176f20b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>
    <div class="col-4 pb-4">
      <img
        src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
        alt="A picture of a book" class="w-100">
    </div>
  </div>
</div>

@endsection
