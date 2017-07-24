@if(count($errors))
    <div class="form-group col-lg-6 col-sm-6">

    <div class="alert alert-danger">
      <ul>

        @foreach($errors->all() as $error)

        <li> {{$error}} </li>

        @endforeach


      </ul>

    </div>

    </div>
    @endif