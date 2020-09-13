@extends('layouts.adminDashBoard')


@section('content')
  <div class="text-right">
    <a href="{{route('student.create')}}" class="btn m-2 btn-primary">Create Student</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h5>Students</h5>
    </div>
    {{-- {{$students}} --}}
    @if(isset($students) && count($students))
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>

        </tr>
      </thead>
      <tbody>

        @foreach ($students as $key => $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <td><a href="{{route('student.show',['student'=>$value->id])}}" class="card-link">{{$value->name}}</a></td>
            <td scope="col"><a href="{{route('student.edit',['student'=>$value->id])}}" class="btn btn-primary">Edit</a></td>
            <td scope="col"><a href="{{route('student.destroy')}}" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach

      </tbody>
    </table>
  @else
    <div class="text-center">
      <h3>Sorry,no students yet.</h3>
    </div>
  @endif
  </div>
@endsection
