@extends('layouts.main')

@section('content')

@if(Auth::user()->level == 1)

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Students Assing to Course</h6>
    </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Course Name</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Course Name</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      @foreach($users as $u)
                        <tr>
                            <td>{{$u -> name}}</td>
                            <td>{{$u -> email}}</td>
                            <td>{{$u -> tel}}</td>
                            <td>{{$u -> cname}}</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endif
@endsection
