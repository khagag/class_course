@extends('layouts.app')


@section('content')
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-12">
        <div class="row justify-content-center">
          @foreach ($courses as $key => $value)
            <div class="card m-2"style="width: 14rem;" >
              <img src="{{ $value->img ?? "https://via.placeholder.com/600x400.png?text=Course+Cover"}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$value->name ?? "Course Title"}}</h5>
                @if(isset($value->id))
                  <a href="{{route('enroll',['course'=>$value->id])}}" class="btn btn-primary">Enroll</a>
                @else
                  <a href="" class="btn btn-primary">Enroll</a>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
