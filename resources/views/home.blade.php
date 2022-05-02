@extends('layouts.main')

@section('content')

@if(Auth::user()->level == 1)

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                All members</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
                        </div>
                        <a href="{{route('content.index')}}" class="btn btn-info" style="width:50%;">show</a>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Add Student to Course</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('studentcourse.index')}}" class="btn btn-info">Add</a> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Assing Students
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{route('assingcourse.index')}}" class="btn btn-info">Cheack</a> </div>
                            <div class="row no-gutters align-items-center">


                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example ->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!- Content Row -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <a href="{{route('course.create')}}" class="btn btn-primary">Add Course</a>
          <br><br>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th></th>
                <th>Course Name</th>
                <th>Image</th>
                <th>Catagary</th>
                <th>Video</th>
                <th>price</th>
                <th>Level</th>
                <th>Language</th>
              </tr>
              @foreach($courses as $c)
                <tr>
                  @if($c->clock == '0')
                    <td>
                      <form class="" action="{{route('course.edit',$c->id)}}" method="get">
                        @csrf
                        <input type="text" name="id" value="{{$c->id}}" style="display:none">
                        <input type="text" name="lock" value="1" style="display:none">
                        <button type="submit" name="button" class="btn btn-info"><i class="fas fa-lock"></i></button>
                      </form>
                      <!--a href="{{route('course.destroy',$c->id)}}" class="btn btn-danger">Delete</a-->
                      <form method="post" action="{{route('course.destroy',$c->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <a href="{{route('course.show',$c->id)}}" class="btn btn-primary">Show</a>
                    </td>
                  @else
                    <td>
                      <form class="" action="{{route('course.edit',$c->id)}}" method="get">
                        @csrf
                        <input type="text" name="id" value="{{$c->id}}" style="display:none">
                        <input type="text" name="lock" value="0" style="display:none">
                        <button type="submit" name="button" class="btn btn-info"><i class="fas fa-unlock"></i></button>
                      </form>

                      <form method="post" action="{{route('course.destroy',$c->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <a href="{{route('course.show',$c->id)}}" class="btn btn-primary">Show</a>
                    </td>
                  @endif

                  <td>{{$c->cname}}</td>
                  <td><div class="embed-responsive embed-responsive-16by9" width="300px">
                      <iframe class="embed-responsive-item" src="{{$c -> cimg}}"></iframe>
                  </div></td>
                  <td>{{$c->ccat}}</td>
                  <td>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="{{$c->civ}}" width="260" height="180"></iframe>
                    </div></td>
                  <td>{{$c->cprice}}</td>
                  <td>{{$c->clevel}}</td>
                  <td>{{$c->clang}}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  @elseif(Auth::user()->level == 2)

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th></th>
              <th>Course Name</th>
              <th>Image</th>
              <th>Catagary</th>
              <th>Video</th>
              <th>price</th>
              <th>Level</th>
              <th>Language</th>
            </tr>
            @foreach($courses as $c)
              <tr>
                @if($c->clock == '0')
                  <td>
                    <form class="" action="{{route('course.edit',$c->id)}}" method="get">
                      @csrf
                      <input type="text" name="id" value="{{$c->id}}" style="display:none">
                      <input type="text" name="lock" value="1" style="display:none">
                      <button type="submit" name="button" class="btn btn-info"><i class="fas fa-lock"></i></button>
                    </form>
                    <!--a href="{{route('course.destroy',$c->id)}}" class="btn btn-danger">Delete</a-->
                    <form method="post" action="{{route('course.destroy',$c->id)}}">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>

                      <a href="{{route('course.show',$c->id)}}" class="btn btn-primary">Show</a>
                  </td>
                @else
                  <td>
                    <form class="" action="{{route('course.edit',$c->id)}}" method="get">
                      @csrf
                      <input type="text" name="id" value="{{$c->id}}" style="display:none">
                      <input type="text" name="lock" value="0" style="display:none">
                      <button type="submit" name="button" class="btn btn-info"><i class="fas fa-unlock"></i></button>
                    </form>

                    <form method="post" action="{{route('course.destroy',$c->id)}}">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>

                      <a href="{{route('course.show',$c->id)}}" class="btn btn-primary">Show</a>
                  </td>
                @endif

                <td>{{$c->cname}}</td>
                <td><div class="embed-responsive embed-responsive-16by9" width="300px">
                    <iframe class="embed-responsive-item" src="{{$c -> cimg}}"></iframe>
                </div></td>
                <td>{{$c->ccat}}</td>
                <td><div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="{{$c->civ}}" width="260" height="180"></iframe>
                </div></td>
                <td>{{$c->cprice}}</td>
                <td>{{$c->clevel}}</td>
                <td>{{$c->clang}}</td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>


  @else




    <?php $nda = date('m');
          $nnda = $nda-1;
     ?>

    <div class="container-fluid">
      <div class="row">
        @foreach($courses as $c)
          @foreach($assingcourse as $ass)
            @if(Auth::user()->id == $ass->stid)
              @foreach($addcourse as $a)
                @if($c->clock == '1')
                  @if(Auth::user()->id == $a->stid && $a->coid == $c->id)
                    @if($a->month == $nda || $a->month == $nnda)
                      <div class="col-sm-4">

                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="{{$c->civ}}" width="260" height="180"></iframe>
                        </div>
                        <br>
                        <h2><a href="{{route('course.show',$c->id)}}" class="btn btn-primary">{{$c->cname}}</a></h2>
                        <h4>{{$c->ccat}} - {{$c->clevel}}</h4>
                        <h4>Rs. {{$c->cprice}} - {{$c->clang}}</h4>

                      </div>

                    @else

                        <script type="text/javascript">
                          window.location.replace("{{route('studentcourse.destroy',$a->id)}}");
                        </script>
                    @endif

                  @endif
              
                @endif
              @endforeach
            @endif
          @endforeach

        @endforeach
      </div>
    </div>

  @endif

@endsection
