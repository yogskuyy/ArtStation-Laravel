@extends('layouts.app')

@section('content')
<nav class="menu-container">
  <div class="logo">
    <img src="{{ asset('Asset/ARTSTATION (1920 x 1080 piksel).png') }}" width="150px" height="70px"/>
    <input type="checkbox" id="menu-btn">
    <label for="menu-btn">
      <i class="material-icons large-icon">&#xe5d2;</i>
    </label>
  </div>
  <div class="menu" id="menu">
    <ul>
      <li><a href="{{ url('TUGAS2.html') }}">Home</a></li>
      <li><a href="#profile">Shop</a></li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="{{ url('admin/DashboardAdmin.php') }}">Admin</a></li>
      <li class="login"><a id="login-btn">Login</a></li>
    </ul>
  </div>
</nav>
<section class="cari">
  <div class="konten">
    <div>
      <h1>Welcome to ArtStation</h1>
      <h1>Cari Seni Apa Kali Ini?</h1>
      <div class="search-container">
        <span class="search-icon"><i class="fas fa-search"></i></span>
        <input type="text" class="search-input" placeholder="Cari">
      </div>
    </div>
    <nav class="navbar">
      <a href="#">
        <img src="{{ asset('Asset/catergori/1.png') }}" alt="Home">
        <p>Game</p>
      </a>
      <a href="#">
        <img src="{{ asset('Asset/catergori/2.png') }}" alt="About">
        <p>Natural</p>
      </a>
      <a href="#">
        <img src="{{ asset('Asset/catergori/3.png') }}" alt="Contact">
        <p>Animasi</p>
      </a>
      <a href="#">
        <img src="{{ asset('Asset/catergori/4.png') }}" alt="ex">
        <p>Animal</p>
      </a>
      <a href="#">
        <img src="{{ asset('Asset/catergori/5.png') }}" alt="Lainnya">
        <p>More</p>
      </a>
    </nav>
  </div>
</section>
<div class="carousel-container">
  <div class="carousel-slide" id="carouselSlide">
    <img src="{{ asset('Asset/c1.png') }}" alt="Image 1">
    <img src="{{ asset('Asset/c2.png') }}" alt="Image 2">
    <img src="{{ asset('Asset/c3.png') }}" alt="Image 3">
  </div>
</div>
<button class="carousel-prev" id="prevBtn">&#10094;</button>
<button class="carousel-next" id="nextBtn">&#10095;</button>
<section class="hero">
  <div class="container">
    <h2>Galery</h2>
    <div class="container">
      <div class="gallery">
        <div class="post">
          <img src="{{ asset('Asset/1.png') }}" alt="Image 1">
          <div class="likes">
            <i class="fas fa-heart"></i>
            <span>123</span>
          </div>
        </div>
        <!-- Tambahkan item galeri lainnya sesuai kebutuhan -->
      </div>
    </div>
  </div>
</section>
@endsection
