@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/book" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
      <div class="col-8 offset-2">

        <div class="row p-3">
          <div class="col-md-4"></div>
          <div class="col-md-6">
            <h3>Add New Book</h3>
          </div>
        </div>

        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Book title') }}</label>

          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
              value="{{ old('title') }}" autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Book description') }}</label>

          <div class="col-md-6">
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
              name="description" value="{{ old('description') }}" autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Book image') }}</label>

          <div class="col-md-6">
            <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image"
              value="{{ old('image') }}" autocomplete="image" autofocus>

            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
          </div>
        </div>

        <div class="row pt-3">
          <div class="col-md-4"></div>
          <div class="col-md-6"><button class="btn btn-primary">Add New Book</button></div>
        </div>

      </div>
    </div>
  </form>
</div>

@endsection
