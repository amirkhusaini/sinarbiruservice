@extends('layouts.home')
@section('title', 'Sinar Biru Services')
@section('content')
    {{-- topbar --}}
    <nav>
        <div class="nav_logo">
            <a href="#">Sinar Biru Services</a>
        </div>
        <ul class="nav_link">
            {{-- <li class="link"><a href="">Whatsapp</a></li> --}}
            {{-- <li class="link"><a href="">About</a></li>
            <li class="link"><a href="">Service</a></li>
            <li class="link"><a href="">Testimony</a></li> --}}
        </ul>
    </nav>

    <header class="section_container header_container">
        <div class="header_content">
            <span class="bg_blur"></span>
            <span class="bg_blur header_blur"></span>
            <h4>THE BEST JOUNDICE LIGHT IN TOWN</h4>
            <h1><span>DELIVERY </span>RIGHT TO YOUR FRONT DOOR!</h1>
            <p>
                We cover all
                <span>Johor Bahru</span>,
                <span>Skudai</span>,
                <span>Kota Tinggi</span>,
                <span>Kulai</span>,
                <span>Nusajaya</span>,
                <span>Pasir Gudang</span>,
                <span>Pontian</span>,
                <span>Senai</span>. <br>
                Contact us to check you area are in our coverage.
            </p>
            <button class="btn">Contact Us</button>
        </div>
        <div class="header_image">
            <div class="slick">
                <div>
                    <img src="{{ asset('image/product2.jpeg') }}" alt="Header">
                </div>
                <div>
                    <img src="{{ asset('image/product3.PNG') }}" alt="Header">
                </div>
                <div>
                    <img src="{{ asset('image/product4.PNG') }}" alt="Header">
                </div>
            </div>
            {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">0</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/product2.jpeg') }}" alt="Header">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/product2.jpeg') }}" alt="Header">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> --}}
        </div>
    </header>
    {{-- content --}}
    @include('home.body')
    {{-- footer --}}
    @include('home.footer')
@endsection
