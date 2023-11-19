<!-- resources/views/components/navbar.blade.php -->

<nav id="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('logos/logo2.png') }}" alt="" style="width: 70px;" />
        </div>

        <ul class="list-unstyled components">
            <p><a href="{{ route('index') }}">My Site</a></p>
            <li class="active">
                <a
                    href="#homeSubmenu"
                    data-toggle="collapse"
                    aria-expanded="false"
                    >Home</a
                >
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">Home 1</a></li>
                    <li><a href="#">Home 2</a></li>
                    <li><a href="#">Home 3</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('gempa') }}">Gempa</a>
                <a
                    href="#pageSubmenu"
                    data-toggle="collapse"
                    aria-expanded="false"
                    >Pages</a
                >
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a
                    href="{{ route('index') }}"
                    >Back to the home</a
                >
            </li>
        </ul>
    </nav>