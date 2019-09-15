@extends('layouts.app')

@section('content')
<div class="container pt-5 border">
  <div class="row">

    <div class="col-8 ">
      <img src="/storage/{{$book->image}}" class="w-100">
    </div>

    <div class="col-4">
      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="/storage/{{$book->user->profile->image}}" class="w-100 rounded-circle" style="max-width:40px;">
        </div>

        <div>
          <div class="font-weight-bold">{{$book->user->username}}</div>
          <!-- <p>{{$book->title}}</p>
          <p>{{$book->description}}</p> -->
        </div>
      </div>

    </div>

  </div>
</div>

@endsection
