<div class="user col-lg-12 bg-color-primary glyphicon">
       <p class="id" font-family="pixel"><a href="#" class="id">{{$tweet->User->name}}</a>

       	{{$tweet->created_at->diffForHumans()}} : &nbsp</p>
       </div>

<h5>

	<p class="space jumbotron" font-family="Serif">

		{{$tweet->tweet}}

</p>

</h5>