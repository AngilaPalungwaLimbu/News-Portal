<nav class="navbar navbar-expand-lg pcolor">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link active fs-5 pe-5 text-white" aria-current="page"
                            href="{{ $menu->id }}">{{ $menu->category_name }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</nav>
