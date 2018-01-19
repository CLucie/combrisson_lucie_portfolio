<!-- Navbar -->
<nav class="navbar fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="{{route('accueil')}}">
		<img src="img/perso/cl.svg" width="40" height="40" alt="CL">
		</a>
	<ul class="nav">
	  <li class="nav-item">
	    <a class="nav-link <?php echo ($page == "presentation" ? "navactive" : "") ?>" href="{{route('accueil')}}">Présentation</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php echo ($page == "competences" ? "navactive" : "") ?>" href="{{route('qualifskills')}}">Compétences</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php echo ($page == "portfolio" ? "navactive" : "") ?>" href="{{route('portfolio')}}">Portfolio</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php echo ($page == "contact" ? "navactive" : "") ?>" href="{{route('contact')}}">Contact</a>
	  </li>
	  @auth
		  <li class="nav-item">
		    <a class="nav-link" href="{{route('admessages')}}">Administration</a>
		  </li>
	  @endauth
      @auth
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->first_name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <span id="dropdowndeco">Déconnexion</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
       @endauth
    </ul>	
</nav>
<!-- End Navbar -->