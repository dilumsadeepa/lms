@extends('layouts.main')

@section('content')

  @if(Auth::user()->level == 1)

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <form action="{{route('studentcourse.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Student Name or id</label>
              <select class="form-select" name="stid">
                @foreach($users as $u)
                  <option value="{{$u -> id}}">{{$u -> id}} - {{$u -> name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">course</label>
              <select class="form-select" name="coid">
                @foreach($courses as $c)
                  <option value="{{$c -> id}}">{{$c -> id}} - {{$c -> cname}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Month</label>
              <input type="text" name="month" placeholder="month mm" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

  @endif



@endsection
