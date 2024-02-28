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
            <img src="{{ asset('image/therapy4.jpg') }}" alt="Header">
        </div>
    </header>
    {{-- content --}}
    @include('home.body')
    {{-- footer --}}
    @include('home.footer')
@endsection
