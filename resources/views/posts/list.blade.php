@extends('layouts.app')


@section('content')

<div class="container">
<a href="{{route('criarPost')}}" class="btn btn-warning btn-lg active m-9" role="button" aria-pressed="true">Crie seu post</a>
</div>

<div class="container" style = "width:900px;height:700px">

   <div class="row justify-content-center">

       <div class="col-md-8" >

           @foreach ($posts as $post)

               <div class="card mt-4">

                   <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap" >

                   <div class="card-body">{{$post->description}}</div>

                   <div> <img src="{{ asset('images/coracao.png') }}" style = "width:35px; height:35px"><span style = "position:relative;left:5px">{{$post->likes}} likes</span></div>


                   <a href="{{route('like', ['idPost' => $post->id])}}" class="btn btn-outline-danger m-2" role="button" > Like</a>
                   <a href="{{route('dislike', ['idPost' => $post->id])}}" class="btn btn-danger m-2" role="button" >Dislike</a>
                  
                @if (isset($comments))
                @foreach ($comments as $comment)
                  @if ($comment->post_id == $post->id)
                  <div>
                  <table border="0"><tr><td style = "width: 400px;position:relative;left:5px;"><p> {{$comment->comment}}</p></td> 
                    <td></td> 
                    <td><a class="btn btn-warning" style = "width: 150px; height: 30px; font-size:15px;text-align: center" href="/comment/delete/{{$comment->id}}">Deletar comentário</a>
                    </td> </tr>
                  </table>
                  
                  
                </div>
                  @endif
                  @endforeach
                  @endif
                <form action="/comment/{{$post->id}}" method="POST">

               @csrf

                  <div class="form-group">
                    <textarea class="form-control" name="comment" rows="3" placeholder="Comente a publicação" style = "width: 550px; height: 60px;position:relative;left:5px;top:10px;"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit" style = "float:right;"> Comentar </button>
                  </div>
                </form> 
               </div>   

           @endforeach

       </div>

   </div>

</div>

@endsection