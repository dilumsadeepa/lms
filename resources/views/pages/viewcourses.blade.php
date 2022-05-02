@extends('layouts.main')

@section('content')

<div class="container-fluid">
  <div class="row">
    @foreach($courses as $c)
      <div class="col-sm-4">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="{{$c->civ}}" width="260" height="180"></iframe>
            </div>
            <br>
            <h2><a href="{{route('coursede.show',$c->id)}}" class="btn btn-primary">{{$c->cname}}</a></h2>
            <h4>{{$c->ccat}} - {{$c->clevel}}</h4>
            <h4>Rs. {{$c->cprice}} - {{$c->clang}}</h4> 
        </div>
      @endforeach
    </div>
</div>

@endsection
