<div class="header">

    <a href="/"><img src="{{URL::asset('/images/respo_logo.png')}}" alt="logo" ></a>
      @if (Route::has('login'))
      <div class="left-header">

                    @auth
                    <a href="{{ route('profile') }}">{{(Auth::user()->name)}}</a>
                    <a href="{{ route('logout') }}" > Logout</a>

     
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign up</a>
                        @endif
                    @endauth

      </div>
      @endif

</div>