@extends('layouts.main')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      @foreach($courses as $c)

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$c->civ}}" allowfullscreen></iframe>
          </div>
        <br>
        <hr><br>
        <h2>{{$c -> cname}}</h2>
        <hr>
        <h4>For {{$c -> ccat}} And {{$c -> clevel}}   --  Fee RS. {{$c -> cprice}}</h4>
        <p>{{$c -> clang}}</p>
        <form class="" action="{{route('assingcourse.store')}}" method="post">
          @csrf
          <input type="text" name="stid" value="{{Auth::user()->id}}" class="inhi">
          <input type="text" name="coid" value="{{$c -> id}}" class="inhi">
          <button type="submit" name="button" class="btn btn-primary">Join to the course</button>
        </form>
        <a href="{{route('coursede.edit',$c->id)}}" class="btn btn-primary">Join to the course</a>
        <br><hr><br>
        <p style="text-align:justify;">{{$c -> cdis}}</p>
        <?php $coid = $c ->id ?>

      @endforeach
    </div>

  </div>
</div>

@endsection


<style media="screen">
  .inhi{
    visibility: hidden;
  }
</style>
