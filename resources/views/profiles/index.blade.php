@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="{{$user->profile->profileImage()}}" alt="default profile Image" class='rounded-circle w-100'>
    </div>

    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-center pb-2">
          <div class="h4">{{$user->username}}</div>
          <follow-Button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-Button>
        </div>

        @can('update', $user->profile)
        <a href="/book/create"><button class="btn btn-outline-primary">Add New Book</button></a>
        @endcan
      </div>

      @can('update', $user->profile)
      <a href="/profile/{{$user->id}}/edit"><button class="btn btn-sm btn-secondary mb-2">Edit Profile</button></a>
      @endcan

      <div class="d-flex">
        <div class="pr-5"><strong>{{$booksCount}}</strong> books</div>
        <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
        <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
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
