@extends('layouts.dashboard')

@section('sidebar')
  <div class="card">
    <div class="card-header">
      <h4>List</h4>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="{{route('student.index')}}" class="card-link">students</a></li>
      <li class="list-group-item"><a href="{{route('course.index')}}" class="card-link">courses</a></li>
      <li class="list-group-item"><a href="{{route('lesson.index')}}" class="card-link">lessons</a></li>
    </ul>
  </div>
@endsection

@section('content')
  @yield('content')
@endsection
