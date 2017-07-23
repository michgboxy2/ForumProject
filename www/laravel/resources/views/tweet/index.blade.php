 @extends('layout.master')


 @section('content')

 <form class="form-horizontal" method="POST" action="/tweet">
    {{  csrf_field() }}
      <fieldset>
        
        <div class="form-group col-lg-6 col-sm-6">
        <label for="textArea col-lg-6"  class="form-control-label">what's on your mind</label>

        <textarea class="form-control" rows="3" col="2" id="textArea" name="tweet"></textarea>
        <br>
        <div class="form-group">

        <input type="submit" name="button" class="btn btn-primary btn-sm"> 

      </div>
                 
      </div>

    </fieldset>


    </form>
    @include('layout.errors')

 <div class="col-lg-6 col-sm-6">
   
    <div class="container">
      <div class="row">
        
       @foreach($tweet as $tweet)
        @include('tweet.tweets')

        
          <div class="buttons">
        <a class="edit btn btn-primary btn-sm" href="/tweet/{{$tweet->id}}">comment</a>
            <a class="edit btn btn-primary btn-sm" href="/{{$tweet->id}}">like</a>
            <a class="edit btn btn-primary btn-sm" href="/{{$tweet->id}}">reply</a>

          </div>

          @endforeach

        
        
    </div>

    </div>
  </div>

  @endsection