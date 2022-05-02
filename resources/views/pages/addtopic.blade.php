@extends('layouts.main')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 box">
        <br><br>
        <h2>Add topic</h2>
        <br><br>
        <form action="{{route('topic.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter Topic name" name="topicname">
            </div>
            <div class="col">
              <input type="text" class="form-control" value="{{$cid}}" name="cid">
            </div><br>
            <div class="col-sm-3">
            <button type="submit" name="button" class="btn btn-info">ADD</button>
          </div><br><br>
          </div>
        </form>
      </div>
    </div>


  </div>

  <style media="screen">
    .box{
      text-align: center;
    }
  </style>

@endsection
