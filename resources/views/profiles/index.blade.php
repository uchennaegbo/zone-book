@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="/storage/{{$user->profile->image}}" alt="A user image" class='rounded-circle w-100'>
    </div>

    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>

        @can('update', $user->profile)
        <a href="/book/create"><button class="btn btn-primary">Add New Book</button></a>
        @endcan
      </div>

      @can('update', $user->profile)
      <a href="/profile/{{$user->id}}/edit"><button class="btn btn-sm btn-secondary mb-2">Edit Profile</button></a>
      @endcan

      <div class="d-flex">
        <div class="pr-5"><strong>{{$user->books->count()}}</strong> books</div>
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

    @foreach($user->books as $book)
    <div class="col-4 pb-4">
      <a href="/book/{{$book->id}}"> <img src="/storage/{{$book->image}}" alt="A picture of a book" class="w-100"></a>
    </div>
    @endforeach

  </div>
</div>

@endsection
