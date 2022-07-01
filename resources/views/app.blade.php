<!DOCTYPE html>
<div lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>

          </head>
    <body id="app">
    <example-component />
    <ul>
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">{{__('login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{__('Register')}}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown toggle" href="#" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="/user/list">Users</a>
{{--        <a class="dropdown-item" href="{{ route('products.index')}}">Produkts</a>--}}
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
 "              document.getElementById('logout-form').submit();">
        {{__('logout')}}
        </a>
    <form id="logout-form"  action="{{route('logout')}}" method="POST" class="d-none">
    @csrf
    </form>
    </div>
    </li>
    @endguest
    </ul>
</div>
    </body>
</html>
