<div class="top-nav col-lg-6 col-sm-6">
      <nav class="navbar">
    <ul id="ul" class="nav container">
      <li class="nav-item"><a href="#" class="nav-link"><span>Home</span></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><span>Profile</span></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><span>Mentions</span></a></li>
      <li class="nav-item"><a href="#" class="nav-link"><span>Logout</span></a></li> 
      @if(Auth::check())
      <li class="nav-item ml-auto"><a href="#" class="nav-link"><span>{{Auth::User()->name}}</span></a></li>  

      @endif     
   </ul>
    </nav>

   </div>