<div>
    <!-- Page Header-->
    <?php
        use Illuminate\Support\Facades\Route;
        if (!Route::currentRouteName())
            $img = "assets/img/home-bg.jpg";
        else
            $img = "assets/img/" . Route::currentRouteName() . "-bg.jpg";
    ?>

    <header class="masthead" style="background-image: url('@yield('bg-img', "$img")')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-auto">
                    <div class="page-heading">
                        <h1> @yield('title', 'Welcome') </h1>
                        <span class="subheading"> @yield('subtitle', 'This is my blog') </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

{{--Ovdje je odradjeno malo gimnastike xD--}}
{{--Posto se u header-u slika postavlja po imenu rute, kada idemo na rutu / ova metoda currentRouteName()
vraca neki random string, tako da je ovo mozda jedino rjesenje--}}
