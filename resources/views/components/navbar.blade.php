<nav class="navbar navbar-expand-lg 
    @if(Route::currentRouteName() == 'welcome') bg-dark @elseif(Route::currentRouteName() == 'team') bg-primary @else bg-danger @endif">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="/media/Logo.png" alt="logo" class="logo b-5 rounded-circle border border-black">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'welcome' ? 'active' : '' }} text-white"
                      href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'team' ? 'active' : '' }} text-white"
                      href="{{ route('team') }}">Sfoglia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'contatti' ? 'active' : '' }} text-white"
                      href="{{ route('contatti') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
