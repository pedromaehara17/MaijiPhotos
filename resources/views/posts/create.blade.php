@extends('layouts.app')


@section('content')

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <h1>Fazer post novo</h1>

           <form method="POST" enctype="multipart/form-data" action="/posts">

         

               @csrf

               Descrição<textarea type="text" name="description" class="form-control"></textarea>

         <br>

               Filter:<input type="text" name="filter" class="form-control">

         
<br>
               Arquivo:<input type="file" class="btn btn-light" name="image_path">

         
              <br><br>
               <button type="submit" class="btn btn-warning btn-lg">Enviar</button>

           </form>

       </div>

   </div>

</div>

@endsection