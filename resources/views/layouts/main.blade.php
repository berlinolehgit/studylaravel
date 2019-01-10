<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <h1>{{__('education.city') }}</h1>
                <h2>{{__('education.company') }}</h2>
            </div>
        </header>
        <nav class="page-navigation">
            <div class="navbar-nav ml-auto">
                <!-- Authentication Links -->

            </div>
            <div class=" nav container navbar dropdown">
                    <a href="{{ route('index') }}" class="{{Request::is('/')?'active-1':''}}">Головна</a>
                    <div class = "dropdown-offer">
                        <a href="" class="dropdown_item {{Request::is('offers*')?'active-1':''}} ">Оголошення</a>
                            <div class="dropdowncontent">
                                <a href="{{ route('offer.index') }}" class="{{Request::is('offers')?'active-1':''}}" >Перегляд оголошення</a>
                                <a href="{{ route('offer.add') }}" class="{{Request::is('offers/add')?'active-1':''}}" >Добавлення оголошення</a>
                            </div>
                    </div>
                    <div class = "dropdown-offer">
                        <a href="" class="dropdown_item {{Request::is('users*')?'active-1':''}}">Користувачі</a>
                        <div class="dropdowncontent">
                            <a href="{{ route('users.index') }}" class="{{Request::is('users')?'active-1':''}}">Перегляд користувачів</a>
                            <a href="{{ route('register') }}" class="{{Request::is('users/add')?'active-1':''}}">Добавлення користувача</a>
                        </div>
                    </div>
{{--                @if(Auth::user() && Auth::user()->role=='ADMIN')--}}
                    <a href="{{ route('typePrice') }}" class="{{Request::is('addType*')?'active-1':''}}">Аdmin</a>
                {{--@endif--}}
                @if (Route::has('login'))
                    <div class="dropdown_item" style="float: right">
                        @auth
                        @else
                            <a href="{{ route('login') }}">Вхід</a>
                        @endauth
                    </div>
                @endif
                @guest
                    @if (Route::has('register'))
                    @endif
                @else
                    <div class="dropdown-offer">
                        <a id="navbarDropdown" class="dropdown_item" href="{{route('users.index')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdowncontent" aria-labelledby="navbarDropdown">
                            <a class="dropdown_item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ВИХІД
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <p>Copyright © Example.com 2018</p>
            </div>
        </footer>
    </body>
</html>

