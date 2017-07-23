 @extends('layout.master')


 @section('content')

 <form class="form-horizontal" method="POST" action="/home">
    {{  csrf_field() }}
      <fieldset>
        
        <div class="form-group col-lg-6 col-sm-6">
        <label for="textArea col-lg-6"  class="form-control-label">what's on your mind</label>

        <textarea class="form-control" rows="3" col="2" id="textArea"></textarea>
        <br>

        <input type="submit" name="button" class="btn btn-primary btn-sm"> 
                 
      </div>

    </fieldset>


    </form>

 <div class="col-lg-6 col-sm-6">
   
    <div class="container">
      <div class="row">
        <div class="user col-lg-12 bg-color-primary glyphicon">
       <p class="id" font-family="pixel">Elufioye Michael<a href="#" class="id">@Michael</a> ..2hrs</p>
       </div>
        <h5><p class="space jumbotron" font-family="Serif">let's settle this twitter, awa niyennnnnnnnn....
          so,let's do this one and fucking for all.. you dig guyz? let's settle this twitter, awa niyennnnnnnnn....
          <div class="buttons">
        <a class="edit btn btn-primary btn-sm" href="#">comment</a>
            <a class="edit btn btn-primary btn-sm" href="#">like</a>
            <a class="edit btn btn-primary btn-sm" href="#">reply</a>

          </div>

        </p></h5>
        
    </div>

    </div>
  </div>

  @endsection