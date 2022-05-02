@extends('layouts.main')

@section('content')

<div class="container">
  <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="row">
      <div class="col">
        <label for="cname">Course Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="cname">
      </div>
      <div class="col">
        <label for="image">Intro Image</label>
        <input type="text" class="form-control" placeholder="select image" name="cimg">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="tid">Teacher in charge</label>
        <input type="text" class="form-control" value="{{Auth::user()->id}}" name="ctid">
      </div>
      <div class="col">
        <label for="ccat">Course Catagary</label>
        <input type="text" class="form-control" placeholder="Enter Catagary" name="ccat">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="civ">Intro Video</label>
        <input type="text" class="form-control" placeholder="select video" name="civ">
      </div>
      <div class="col">
        <label for="cprice">Price</label>
        <input type="number" class="form-control" placeholder="Enter Price" name="cprice">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="clevel">Course Level</label>
        <input type="text" class="form-control" placeholder="Enter Level" name="clevel">
      </div>
      <div class="col">
        <label for="clang">Lnguage</label>
        <input type="text" class="form-control" placeholder="Enter Language" name="clang">
      </div>
    </div>

    <div class="row">

      <div class="col">
        <label for="email">Course Discription</label>
        <textarea class="form-control" rows="10" id="comment" name="cdis"></textarea>
      </div>
    </div>
<br><br>
    <div class="row">
      <div class="col-sm-2">
        <button type="submit" name="button" class="btn btn-info">Submit</button>
      </div>

    </div>

  </form>


</div>



@endsection
