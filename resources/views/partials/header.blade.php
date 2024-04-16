<header class="container">

    <nav class="d-flex justify-content-between align-items-center">
        <!-- logo -->
        <a href="{{route('home')}}">
            <img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </a>

        <!-- nav-menu -->
        <ul style="margin-bottom: 0;" class="d-flex">
            <li><a href="#">characters</a></li>
            <li class="active"><a href="{{route('comics.index')}}">comix</a></li>
            <li><a href="#">movies</a></li>
            <li><a href="#">tv</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">collectibles</a></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">fans</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">shop</a></li>
        </ul>
    </nav>


</header>