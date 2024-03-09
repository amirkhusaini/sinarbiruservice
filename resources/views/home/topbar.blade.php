@extends('layouts.home')
@section('title', 'Sinar Biru Services')
@section('content')
    {{-- topbar --}}
    <nav>
        <div class="nav_logo">
            <a href="/">
                <img src="{{ asset('image/logo/SBS.png') }}" alt="logo">
            </a>
            <p><span class="name">Fototerapi Bayi Kuning</span></p>
        </div>
        <ul class="nav_link">
            <li class="link"><a href="https://wa.me/127843100?text=Hi, Saya hendak membuat tempahan lampu Jaundice." target="_blank"><span class="icon"><img src="{{ asset('image/whatsapp/WhatsAppButtonGreenSmall.svg') }}" alt=""></span></a></li>
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
            <a class="whatsapp" href="https://wa.me/127843100?text=Hi, Saya hendak membuat tempahan lampu Jaundice." target="_blank"><span class="icon"><img src="{{ asset('image/whatsapp/WhatsAppButtonGreenSmall.svg') }}" alt=""></span></a>
        </div>
        <div class="header_image">
            <div class="slick">
                <div>
                    <img src="{{ asset('image/product2.jpeg') }}" alt="Header" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('image/product3.PNG') }}" alt="Header" class="img-fluid">
                </div>
                <div>
                    <img src="{{ asset('image/product4.PNG') }}" alt="Header" class="img-fluid">
                </div>
            </div>
        </div>
    </header>
    {{-- content --}}
    @include('home.body')
    {{-- footer --}}
    @include('home.footer')
@endsection
