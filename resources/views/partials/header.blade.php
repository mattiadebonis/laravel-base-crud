<header>
    <ul>
        <li>
            <a class="nav-link {{Route::currentRouteName()== 'home'?'active':''}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName()=='comics.index'?'active':''}}" href="{{route('comics.index')}}">Comics</a>
        </li>
    </ul>
</header>
