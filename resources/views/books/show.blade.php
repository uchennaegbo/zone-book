@extends('layouts.app')

@section('content')
<div class="container pt-5 ">
  <div class="row">

    <div class="col-8 ">
      <img src="/storage/{{$book->image}}" class="w-100">
    </div>

    <div class="col-4">
      <div>
        <div class="d-flex align-items-center">
          <div class="pr-3">
            <img src="{{$book->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width:40px;">
          </div>

          <div>
            <div class="font-weight-bold"><a href="/profile/{{$book->user->id}}"><span
                  class="text-dark">{{$book->user->username}}</span></a>
              <a href="#" class="pl-3">Follow</a>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <p><span class="font-weight-bold"><a href="/profile/{{$book->user->id}}"><span
              class="text-dark">{{$book->user->username}}</span> </a>
        </span>
        {{$book->title}}
      </p>

      <p>{{$book->description}}</p>

    </div>

  </div>
</div>

@endsection
