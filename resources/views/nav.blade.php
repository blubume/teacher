    <div role="navigation" class="navbar navbar-inverse navbar-fixed-top header">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="{{url('/dashboard')}}" class="navbar-brand"><img src="/img/logo.svg" height="50px" class="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="button-link visible-xs hidden-sm visible-md visible-lg">
              <div class="bt">FOR TEACHERS</div>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="balanceMenu"><a href="{{url('/balance')}}">
                <div data-toggle="tooltip" data-placement="bottom" title="Your Balance" class="balanceStatus tooltipInfo">12 700 Р</div></a></li> 
            <li class="headerMenu"><a href="#group">
                <div class="iconGroup"><span>COMMUNITY</span></div></a></li>
            <li class="headerMenu"><a href="#library">
                <div class="iconLibrary"><span>LIBRARY</span></div></a></li>
            <li class="headerMenu"><a href="{{url('/chat')}}">
                <div class="iconChat"><span>MESSAGES</span></div></a></li>
            <li class="headerMenu ratingView"><a href="#">
                <div class="iconRating"><span>5.0</span></div></a></li>
            <li class="dropdown avatar-menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="/img/avatar.jpg" class="avatar"><span class="nickname-header">Kathleen R.</span><span class="myCaret">
                  <div class="arrow_down"></div></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/settings')}}" lang="en">Profile</a></li>
                <li><a href="{{url('/balance')}}" lang="ru">Balance</a></li>
                <li><a href="{{url('/logout')}}" lang="ru">Exit</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>