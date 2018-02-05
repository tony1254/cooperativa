@extends('layouts.app') 
@section('title') - Welcome @endsection 
@section('content')



            
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-black-slight">
                <img class="d-block w-100" src="https://www.ahorradoras.com/wp-content/uploads/2016/03/pablo-12-768x384.png" alt="First slide">
                <div class="mask"></div>
            </div>
            <!-- <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div> -->
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img class="d-block w-100" src="https://www.ahorradoras.com/wp-content/uploads/2016/03/pablo-14-768x384.png" alt="Second slide">
                <div class="mask"></div>
            </div>
            <!-- <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div> -->
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img class="d-block w-100" src="https://www.ahorradoras.com/wp-content/uploads/2016/03/pablo-15-768x384.png" alt="Third slide">
                <div class="mask"></div>
            </div>
            <!-- <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div> -->
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
                

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Iniciar Sesión</a>
        <!-- <a href="{{ route('register') }}">Register</a> @endauth -->
    </div>
    @endif
    <!-- <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div> -->
</div>
@endsection