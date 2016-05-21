<div class="nav-agency">
    <div class="navbar navbar-static-top"> 
        <div class="navbar-inner">
            <div class="container"> <a class="brand" href="{{ url('/') }}"> <img src="/img/Logodark.png" alt="Logo"></a>
                <div id="main-nav">
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="{{ url('/') }}">Главная</a> </li>
                            <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"> Work <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="work.html">One Column</a></li>
                                    <li><a href="work-two-columns.html">Two Column</a></li>
                                    <li><a href="work-three-columns.html">Three Column</a></li>
                                    <li><a href="work-details.html">Work Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{ url('/videos') }}">Видео</a> </li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Вход</a></li>
                                <li><a href="{{ url('/register') }}">Регистрация</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-user"></i>Профиль</a></li>
                                        <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-sign-in"></i>Админка</a></li>
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>