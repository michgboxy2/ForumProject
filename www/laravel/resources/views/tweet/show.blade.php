@extends ('layout.master')

@section('content')




<div class="col-lg-6 col-sm-6">
   
    <div class="container">
        
        <div class="user col-lg-12 bg-color-primary glyphicon">
       <p class="id" font-family="pixel">Elufioye Michael<a href="#" class="id">@Michael</a>

       	{{$tweet->created_at->toTimeString()}}</p>
       </div>

	<h5>

		<p class="space jumbotron" font-family="Serif">

		{{$tweet->tweet}}

		</p>

	</h5>


    	<div class="col-lg-6 col-sm-6">
   
    <div class="container">

    	@foreach($tweet->comments as $comment)
        
        <div class="user col-lg-12 bg-color-primary glyphicon">
       <p class="id" font-family="pixel">Tina<a href="#" class="id">@TinaTweets</a>

       	{{$comment->created_at->diffForHumans()}} : &nbsp</p>
       </div>

	<h5>

		<p class="space jumbotron" font-family="Serif">

		{{$comment->comment}}

		</p>

	</h5>

    
          <div class="buttons">
        <a class="edit btn btn-primary btn-sm" href="/tweet/{{$comment->id}}">comment</a>
            <a class="edit btn btn-primary btn-sm" href="/{{$comment}}">like</a>
            <a class="edit btn btn-primary btn-sm" href="/{{$comment->id}}">reply</a>

          </div>

    </div>
  </div>
  @endforeach

  	<div class="card">

  	<form class="form-horizontal" method="POST" action="/tweet/{{$tweet->id}}">
    {{  csrf_field() }}
      <fieldset>
        
        <div class="form-group">

        <textarea class="form-control" rows="3" col="2" id="textArea" name="comment" placeholder="please enter comment" required></textarea>
        <br>
        <div class="form-group">

        <input type="submit" name="button" class="btn btn-primary btn-sm"> 

      </div>
                 
      </div>

    </fieldset>

    </form>

    </div>
    @include('layout.errors')




@endsection


	