@extends('layouts.main')

@section('content')



  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        @if(Auth::user()->level == 1 || Auth::user()->level == 2)
        <br>
        <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
          New Lesson
          </button>
        <br>
        @endif
        <br>
        @foreach($lesson as $l)
          @if(Auth::user()->level == 1 || Auth::user()->level == 2)


              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$l -> lesson_mat}}" allowfullscreen></iframe>
              </div>
              <br>

                <br>
                <hr><br>
                @if($l->llock == 0)
                <h2>{{$l -> lesson_name}} is locked</h2>
                <br>
                <td>
                  <form class="" action="{{route('lesson.edit',$l->id)}}" method="get">
                    @csrf
                    <input type="text" name="id" value="{{$l->id}}" style="display:none">
                    <input type="text" name="lock" value="1" style="display:none">
                    <button type="submit" name="button" class="btn btn-info"><i class="fas fa-lock"></i></button>
                  </form>
                </td><td>
                  <form method="post" action="{{route('lesson.destroy',$l->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>


                </td>
                @else
                <h2>{{$l -> lesson_name}}</h2>
                <br>
                <td>
                  <form class="" action="{{route('lesson.edit',$l->id)}}" method="get">
                    @csrf
                    <input type="text" name="id" value="{{$l->id}}" style="display:none">
                    <input type="text" name="lock" value="0" style="display:none">
                    <button type="submit" name="button" class="btn btn-info"><i class="fas fa-unlock"></i></button>
                  </form>
                  </td><td>
                  <form method="post" action="{{route('lesson.destroy',$l->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>


                </td>
                @endif
                <br><hr><br>
                <p style="text-align:justify;">{{$l -> lesson_dis}}</p>

                <hr><br><br>
            @else
              @if($l->llock == 1)
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="{{$l -> lesson_mat}}" allowfullscreen></iframe>
                </div>
                <br>

                  <br>
                  <hr><br>
                  <h2>{{$l -> lesson_name}}</h2>
                  <br><hr><br>
                  <p style="text-align:justify;">{{$l -> lesson_dis}}</p>

                  <hr><br><br>
                @else
                  <h2>{{$l -> lesson_name}} is locked</h2>
                  <p>please contact your teacher</p>
                @endif
            @endif
        @endforeach
      </div>



    </div>
  </div>


  <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">New Lesson</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{route('lesson.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="mb-3 mt-3">
              <label for="lesson_name" class="form-label">Lesson Name:</label>
              <input type="text" required class="form-control" id="lesson_name" placeholder="Enter Lesson Name" name="lesson_name">
            </div>

            <div class="mb-3">
              <label for="comment">lesson Discription:</label>
              <textarea class="form-control" rows="5" id="comment" name="lesson_dis"></textarea>
            </div>

            <div class="mb-3 mt-3">
              <label for="lesson_mat" class="form-label">Lessin Materials:</label>
              <input type="text" class="form-control" id="lesson_mat" placeholder="Enter email" name="lesson_mat">
            </div>

            <div class="mb-3">
              <label for="topic_id" class="form-label">Topic id:</label>
              <input type="text" class="form-control" id="topic_id" value="{{$tid}}" name="topic_id">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>





<style media="screen">
  .topicbox{
    border: 2px solid #42e0f5;
  }
</style>

@endsection
