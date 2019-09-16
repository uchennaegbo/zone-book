@extends('layouts.app')

@section('content')
<div class="container pt-5">
  @foreach($books as $book)
  <div class="row border mb-4">

    <div class="col-8 py-4">
      <a href="/profile/{{$book->user->id}}">
        <img src="/storage/{{$book->image}}" class="w-100">
      </a>
    </div>

    <div class="col-4 py-4">
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
  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      {{$books->links()}}
    </div>
  </div>
</div>

@endsection
