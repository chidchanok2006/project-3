<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.client.styles')
    @livewireStyles()
    <title>Document</title>
</head>
<body class="index-page">
@include('layouts.client.navbar')

<main class="main">

<!-- Hero Section -->
<section id="hero" class="section hero light-background">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <h1>Heahty Mates</h1>
        <div class="d-flex">
          <a href="index.html#about" class="btn-get-started">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/home.jpg" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="section about">

  <div class="container">

    <div class="row gy-3">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/doctor.jpg" alt="" class="img-fluid">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content ps-0 ps-lg-3">
          <h3>heathy Mates</h3>
          <p class="fst-italic">
          </p>
          <ul>
            <li>
              <i class="bi bi-diagram-3"></i>
              <div>
                <h4>พร้อมให้คำปรึกษาได้ตลอด</h4>
                <p></p>
              </div>
            </li>
            <li>
              <i class="bi bi-fullscreen-exit"></i>
              <div>
                <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
              </div>
            </li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>

      </div>
    </div>

  </div>

</section><!-- /About Section -->

</section><!-- /Portfolio Section -->


<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-12">

      <div class="col-lg-12">

        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>โลตัสพระราม 5 </p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

     

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>


    </div>

  </div>

</section><!-- /Contact Section -->

</main>
@include('layouts.client.footer')
        @include('layouts.client.scripts')

        {{-- Livewire --}}
        @livewireScripts()
</body>
</html>