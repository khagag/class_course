@extends('layouts.adminDashBoard')


@section('content')
  <div class="text-right">
    <a href="{{route('course.create')}}" class="btn m-2 btn-primary">Create course</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h5>courses</h5>
    </div>
    {{-- {{$courses}} --}}
    @if(isset($courses) && count($courses))
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

        @foreach ($courses as $key => $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <td><a href="{{route('course.show',['course'=>$value->id])}}" class="card-link">{{$value->name}}</a></td>
            <td scope="col"><a href="{{route('course.edit',['course'=>$value->id])}}" class="btn btn-primary">Edit</a></td>
            <td scope="col">
              <form  action="{{route('course.destroy',['course'=>$value->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" >Delete</button>
                </form>
          </tr>
        @endforeach

      </tbody>
    </table>
  @else
    <div class="text-center">
      <h3>Sorry,no courses yet.</h3>
    </div>
  @endif
  </div>
@endsection
