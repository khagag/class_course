@extends('layouts.adminDashBoard')


@section('content')
  @if (session()->has('status'))
    <div class="alert alert-{{session()->get('status')}} alert-dismissible fade show" role="alert">
      <strong>Congrats!</strong> You Created New Studnet.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="card">
      <div class="card-header">{{ __('Course Data') }}</div>

      <div class="card-body">
        <table class="table table-borderless">
          <tbody>
              @foreach ($course->getAttributes() as $key => $value)
                <tr>
                  <td>{{$key}}</td>
                  <td>{!! $value !!}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection
