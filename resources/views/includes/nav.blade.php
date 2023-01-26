
  <nav class="navbar navbar-expand-lg navbar-light p-3">
	<div class="container-fluid">
	  <a class="navbar-brand" href=""><img src="{{ asset('img/logo.jpg') }}" width="50px"></a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class=" collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ms-auto ">
	      <li class="nav-item">
	        <a class="nav-link mx-2" href="{{route("home")}}">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link mx-2" href="/contact">Contact</a>
	      </li>
          <li class="nav-item">
            @guest
                <a class="nav-link" href="/login">Login</a>
            @endguest
            @auth
            <li class="nav-item">
                <a class="nav-link mx-2" href="{{route("questions")}}">Vragen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-2" href="{{route("calender")}}">Calender</a>
            </li>
            @endauth
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link class="nav-link" :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            @endauth
        </li>
	    </ul>
	  </div>
	</div>
	</nav>

