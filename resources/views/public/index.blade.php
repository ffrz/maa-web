<?php
  $nav_active = 'home';
  $title = 'Beranda';
?>
@extends('public.layout')
@section('content')
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat datang di website Salafy CikTaBar</h1>
          <p>
            Bismillah<br><br>
            Al 'afwu minkum, saat ini website sedang dalam tahap pengembangan.<br>
            Semoga Allah memberikan kemudahan dalam pengerjaannya.<br><br>
            Jazaakumullahu khairan wa barakallahufiikum.<br><br>
            Admin
          </p>
          <br><br><br>
          {{-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div> --}}
        </div>
        {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div> --}}
      </div>
    </div>
  </section>
@endSection
