<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Loop</title>

  <!--
      - favicon
    -->
  <link rel="shortcut icon" href="./assets/favicon.png">

  <!--
      - custom css link
    -->
  <link rel="stylesheet" href="{{ asset('landing/style.css') }}">

  <!--
      - google font link
    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">

  <style>
    .btn-login {
      background-color: transparent;
      color: var(--carolina-blue);
      border: 1px solid var(--carolina-blue);
    }

    .btn-login:hover {
      background-color: var(--carolina-blue);
      color: white;
      transition: 0.3s;
    }


    @media screen and (min-width: 768px) {
      .hero-text {
        width: 50%;
      }
    }
  </style>
</head>

<body>

  <!--
      - #HEADER
    -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo" style="text-decoration: none; color: black; font-weight: bold; font-size: 20px;">
        Green Loop
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="#home" class="navbar-link" data-nav-link>Beranda</a>
          </li>
          <li>
            <a href="#featured-product" class="navbar-link" data-nav-link>Produk</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="https://wa.me/628885477865" class="btn btn-login" target="_blank">
          <span>Contact</span>
        </a>
      </div>

    </div>
  </header>


  <main>
    <article>

      <!--
          - #HERO
        -->

      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title" style="font-weight: 900;">
              Katalog Produk Green Loop
            </h2>

            <p class="hero-text">
              Cari produk terbaru dengan harga terjangkau di Green Loop. Dengan berbagai macam produk yang tersedia,
            </p>
          </div>

          <div class="hero-banner"></div>
        </div>
      </section>





      <!--
          - #FEATURED CAR
        -->

      <section class="section featured-car" id="featured-product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Produk terbaru</h2>
          </div>

          <ul class="featured-car-list">
            @foreach ($products as $product)
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="{{ $product->image ?? asset('img/placeholder.jpeg') }}" alt="mobil" loading="lazy" width="440"
                      height="300" class="w-100">
                  </figure>

                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title">
                        {{ $product->name }}
                      </h3>
                    </div>

                    <div class="">
                      <p class="card-text" style="font-size: 14px; color: #6c757d; margin-bottom: 10px;">
                        {{ $product->description }}
                      </p>
                    </div>

                    <div class="card-list">
                    </div>

                    <div class="card-price-wrapper">
                      <p class="card-price">
                        <strong>{{ formatRupiah($product->price) }}</strong>
                      </p>
                      <a href="{{ $product->url }}" class="btn" target="_blank">Beli</a>
                    </div>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>

          @if ($products->isEmpty())
            <div style="margin-top: 50px; margin-bottom: 50px;">
              <p style="text-align: center; font-size: 20px; color: #6c757d;">
                Tidak ada produk
              </p>
            </div>
          @endif

        </div>
      </section>
    </article>
  </main>





  <!--
      - #FOOTER
    -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo" style="width: 50%;">
          </a>

          <p class="footer-text">
            Green Loop adalah platform yang menyediakan berbagai macam produk terbaru dengan harga terjangkau.
          </p>
        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pricing plans</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contacts</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help center</a>
          </li>

          <li>
            <a href="#" class="footer-link">Ask a question</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Neighborhoods in New York</p>
          </li>

          <li>
            <a href="#" class="footer-link">Manhattan</a>
          </li>

          <li>
            <a href="#" class="footer-link">Central New York City</a>
          </li>

          <li>
            <a href="#" class="footer-link">Upper East Side</a>
          </li>

          <li>
            <a href="#" class="footer-link">Queens</a>
          </li>

          <li>
            <a href="#" class="footer-link">Theater District</a>
          </li>

          <li>
            <a href="#" class="footer-link">Midtown</a>
          </li>

          <li>
            <a href="#" class="footer-link">SoHo</a>
          </li>

          <li>
            <a href="#" class="footer-link">Chelsea</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <p class="copyright">
          &copy; 2024 <a href="#">Green Loop</a>. All Rights Reserved
        </p>

      </div>

    </div>
  </footer>

  <!--
      - custom js link
    -->
  <script src="{{ asset('landing/script.js') }}"></script>

  <!--
      - ionicon link
    -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
