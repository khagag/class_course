@extends('layouts.dashboard')

@section('sidebar')
  <div class="card">
    <div class="card-header">
      <h4>List</h4>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="{{route('student.index')}}" class="card-link">Personal Info</a></li>
      <li class="list-group-item"><a href="{{route('course.index')}}" class="card-link">Courses Cataloge</a></li>
    </ul>
    <div class="card-footer"></div>
  </div>
@endsection

@section('content')
  @yield('content')
@endsection
