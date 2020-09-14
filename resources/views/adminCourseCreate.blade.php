@extends('layouts.adminDashBoard')


@section('content')
  @if (session()->has('status'))
    <div class="alert alert-{{session()->get('status')}} alert-dismissible fade show" role="alert">
      <strong>Congrats!</strong> You updated Studnet.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="card">
      <div class="card-header">{{ __('Create course') }}</div>

      <div class="card-body">
          <form method="POST" action="{{ route('course.store') }}">
              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" value='{{$course->name ?? ""}}' class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="x" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
              </div>

              <div class="form-group col">
                <input id="x" type="hidden" name="content"/>
                <trix-editor input="x"></trix-editor>
              </div>
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Create') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
@endsection
