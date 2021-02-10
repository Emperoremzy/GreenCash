<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container">
      <a class="navbar-brand" href="/"><b>Orange<em>Cash</em></b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
        @if (\Request::route()->getName() == 'home')
                           <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('New transactions') }}</a>
                            </li>
                            <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('transactions') }}">{{ __('view transactions') }}</a>
                             </li>
          @endif
          @auth
            @if (auth::user()->users == 1)
                             <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('admin.clients') }}">{{ __('All Clients |') }}</a>
                             </li>
                            <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('admin.alltransact') }}">{{ __('All Transactions |') }}</a>
                             </li>
        
                            <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Dashboard |') }}</a>
                             </li>
            @endif
           @endauth
        @guest
        @if (Request::is('/'))
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href ="#Works">How it works <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href ="#Works">Contact Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href ="{{ route('login') }}">Get Started</a>
            </li>
          @endif
         
           @if (Request::is('register'))
                                <li class="nav-item {{Request::is('/login') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
             @endif
                            
           @if (Request::is('login'))
                                <li class="nav-item {{Request::is('/register') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
            @endif
            @if (\Request::route()->getName() == 'home')
                           <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('New transactions') }}</a>
                            </li>
                            <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ route('transactions') }}">{{ __('view transactions') }}</a>
                             </li>
            @endif
             @else
             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
              @endguest
        </ul>
      </div>
  </div>
    </nav>