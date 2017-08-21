<nav class="navbar">
  		<div >
    		<div class="navbar-header">
    			<div class="">
    				<a class="navbar-brand brand" href="#">
      					<span class="fa fa-heartbeat fa-2x icono-blanco"  aria-hidden="true"></span>
      				</a>
    			</div>
    		</div>
      @if(Auth::guard('web')->check())
      <ul class="nav navbar-nav navbar-right">
      			<li><a href="{{ route('user.logout')}}" style=""><span class="fa fa-sign-out fa-2x icono-blanco "></span>
      			{{ Auth::user()->name}}</a></li>
      			<li><a href="#"><span ></span> </a></li>
    	</ul>
      @endif
      @if(Auth::guard('admin')->check())
      <ul class="nav navbar-nav navbar-right">
      			<li><a href="{{ route('user.logout')}}" style=""><span class="fa fa-sign-out fa-2x icono-blanco "></span>
      			{{ Auth::user()->name}}</a></li>
      			<li><a href="#"><span ></span> </a></li>
    	</ul>
      @endif


    </div>
</nav>
