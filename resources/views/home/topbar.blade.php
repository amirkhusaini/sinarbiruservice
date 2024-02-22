@extends('layouts.home')
@section('title', 'Sinar Biru Services')
@section('content')
    {{-- topbar --}}
    <nav>
        <div class="nav_logo">
            <a href="#">Sinar Biru Services</a>
        </div>
        <ul class="nav_link">
            <li class="link"><a href="">Whatsapp</a></li>
            {{-- <li class="link"><a href="">About</a></li>
            <li class="link"><a href="">Service</a></li>
            <li class="link"><a href="">Testimony</a></li> --}}
        </ul>
    </nav>

    <header class="section_container header_container">
        <div class="header_content">
            <span class="bg_blur"></span>
            <span class="bg_blur header_blur"></span>
            <h4>BEST JOUNDICE LIGHT IN TOWN</h4>
            <h1><span>DELIVERY </span>INFRONT OF YOUR HOUSE</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Modi rem id dolore incidunt iusto,
                nobis repellendus tenetur laboriosam
                mollitia fugit doloremque sapiente et
                recusandae architecto. Maxime doloribus
                expedita obcaecati cumque?
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
