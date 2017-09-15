<!-- ******HEADER****** -->
<header class="header">
    <div class="top-bar">
        <div class="container">
            <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <li><a href="https://twitter.com/nu_suneo" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/NovaUniversitas-187731938004734/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <!--li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li-->
            </ul><!--//social-icons-->
            <!--form class="pull-right search-form" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search the site...">
                </div>
                <button type="submit" class="btn btn-theme">Go</button>
            </form-->
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
                <li><a style="color:white;" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Registrate</a></li>
                <li><a style="color:white;" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
              @else
                <li>
                  <a style="color:white;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <span class="glyphicon glyphicon-log-out"></span>Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
              @endif
            </ul>
        </div>
    </div><!--//to-bar-->
    <div class="header-main container">
        <h1 class="logo col-md-4 col-sm-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"  height="70px">
            <!--a href="index.html"  ><img id="logo" style="color:red" alt="Logo"></a-->
            <!--a href="index.html"><img id="logo" src="{{ asset('images/logo.png') }}" alt="Logo"></a-->
        </h1><!--//logo-->
        <div class="info col-md-8 col-sm-8">
            <ul class="menu-top navbar-right hidden-xs">
                <li class="divider"><a href="{{ url('/') }}">Home</a></li>                
                <li><a href="{{ route('contacts_path') }}">Contact</a></li>
            </ul><!--//menu-top-->
            <br />
            <div class="contact pull-right">
                <p class="phone"><i class="fa fa-phone"></i>LLamanos hoy al 01 951 501 7200</p>
                <p class="email"><i class="fa fa-envelope"></i>NovaUniversitasX@gmail.com</p>
            </div><!--//contact-->
        </div><!--//info-->
    </div><!--//header-main-->
</header><!--//header-->
