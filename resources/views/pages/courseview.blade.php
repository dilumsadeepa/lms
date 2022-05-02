@extends('layouts.main')

@section('content')



  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
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
          <br><hr><br>
          <p style="text-align:justify;">{{$c -> cdis}}</p>
          <?php $coid = $c ->id ?>

        @endforeach
      </div>

      <div class="col-sm-4 topicbox">
        @if(Auth::user()->level == 1 || Auth::user()->level == 2)
        <br>
          <form class="" action="{{route('topic.create')}}" method="get">
            @csrf
            <input type="text" name="cid" value="{{$coid}}" style="display:none">
            <button type="submit" name="button" class="btn btn-primary">New Topic</button>
          </form>
        <br>
        @endif

        @foreach($topics as $t)
          <div class="t-list">
            <table>
              <tr>
                  @if($t->tlock == 0)

                    @if(Auth::user()->level == 1 || Auth::user()->level == 2)
                    <td><a href="{{route('topic.show',$t->id)}}" class="btn btn-info">{{$t -> topicname}}</a></td>
                    <td>
                      <form class="" action="{{route('topic.edit',$t->id)}}" method="get">
                        @csrf
                        <input type="text" name="id" value="{{$t->id}}" style="display:none">
                        <input type="text" name="lock" value="1" style="display:none">
                        <button type="submit" name="button" class="btn btn-info"><i class="fas fa-lock"></i></button>
                      </form>
                      </td><td>
                      <form method="post" action="{{route('topic.destroy',$t->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>


                    </td>
                    @endif
                  @else
                  <td><a href="{{route('topic.show',$t->id)}}" class="btn btn-info">{{$t -> topicname}}</a></td>
                  @if(Auth::user()->level == 1 || Auth::user()->level == 2)
                  <td>
                    <form class="" action="{{route('topic.edit',$t->id)}}" method="get">
                      @csrf
                      <input type="text" name="id" value="{{$t->id}}" style="display:none">
                      <input type="text" name="lock" value="0" style="display:none">
                      <button type="submit" name="button" class="btn btn-info"><i class="fas fa-unlock"></i></button>
                    </form>
                    </td><td>
                    <form method="post" action="{{route('topic.destroy',$t->id)}}">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>


                  </td>

                  @endif
                @endif


              </tr>
            </table>
          </div>
        @endforeach

      </div>

    </div>
  </div>






<style media="screen">
  .topicbox{
    border: 2px solid #42e0f5;
  }
</style>

@endsection
