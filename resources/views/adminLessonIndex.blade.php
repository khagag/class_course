@extends('layouts.adminDashBoard')


@section('content')
  <div class="text-right">
    <a href="{{route('lesson.create')}}" class="btn m-2 btn-primary">Create lesson</a>
  </div>
  <div class="card">
    <div class="card-header">
      <h5>lessons</h5>
    </div>
    {{-- {{$lessons}} --}}
    @if(isset($lessons) && count($lessons))
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

        @foreach ($lessons as $key => $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <td><a href="{{route('lesson.show',['lesson'=>$value->id])}}" class="card-link">{{$value->name}}</a></td>
            <td scope="col"><a href="{{route('lesson.edit',['lesson'=>$value->id])}}" class="btn btn-primary">Edit</a></td>
            <td scope="col">
              <form  action="{{route('lesson.destroy',['lesson'=>$value->id])}}" method="post">
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
      <h3>Sorry,no lessons yet.</h3>
    </div>
  @endif
  </div>
@endsection
