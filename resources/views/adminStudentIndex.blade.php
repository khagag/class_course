@extends('layouts.adminDashBoard')


@section('content')
  <div class="text-right">
    <a href="" class="btn m-2 btn-primary">Create Student</a>
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

        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td scope="col"><a href="" class="btn btn-primary">Edit</a></td>
          <td scope="col"><a href="" class="btn btn-danger">Delete</a></td>
        </tr>

      </tbody>
    </table>
  @else
    <div class="text-center">
      <h3>Sorry,no students yet.</h3>
    </div>
  @endif
  </div>
@endsection
