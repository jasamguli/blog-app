<div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{route("home")}}">Nikola Londrovic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-2 py-3 py-lg-7" href="{{route('home')}}">Home</a></li>
                    {{--                    <li class="nav-item"><a class="nav-link px-lg-2 py-3 py-lg-7" href="{{route('about')}}">About</a></li>--}}
                    <li class="nav-item"><a class="nav-link px-lg-2 py-3 py-lg-7" href="{{route('blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-2 py-3 py-lg-7"
                                            href="{{route('contact')}}">Contact</a></li>
                    @if(auth()->user())
                        <li class="nav-item"><a class="nav-link px-lg-4 py-3 py-lg-7"
                                                href="{{route('admin')}}">Admin</a></li>
                        <li class="nav-item">
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                @method('POST')
                                <button class="btn btn-primary">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link px-lg-4 py-3 py-lg-7"
                                                href="{{route('login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-2 py-3 py-lg7" href="{{route('register')}}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
