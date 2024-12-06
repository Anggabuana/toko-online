<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toko Online Sederhana</title>
<link rel="stylesheet" href="style2.css">
<script src="script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <h1>Toko sepatu</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#container">Produk</a></li>
                <li><a href="#">Keranjang</a></li>
                <li><a href="#">Checkout</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <img class="bd-placeholder-img" width="100%" height="100%" xmlns="https://www.converse.id/media/weltpixel/owlcarousels
         lider/images/s/p/sport_x_hoops_ind_dig_exc_main_desktop_.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img> -->
        <img width="100%" src="https://www.converse.id/media/weltpixel/owlcarouselslider/images/d/e/dekstop_100.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" src="https://www.converse.id/media/weltpixel/owlcarouselslider/images/s/p/sport_x_hoops_ind_dig_exc_main_desktop_.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img width="100%" src="https://www.converse.id/media/weltpixel/owlcarouselslider/images/c/d/cdg-ind-main-desktop_.gif" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
          </div>
        </div>
      </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>

<main id="container">
    <section class="products">
        <h2>Produk Kami</h2>
        <div class="product-card">
            <img src="star.jpg" alt="Product 1">
            <h3>STAR PLAYER 76</h3>
            <h1>product 1</h1>
            <p class="price">Rp. 1.299.000</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="paint.jpg" alt="Product 2">
            <h3>Chuck 70 Paint Splatter</h3>
            <h1>Product 2</h1>
            <p class="price">Rp. 1.199.200</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="run star trainer.jpg" alt="Product 3">
            <h3>Run Star Trainer</h3>
            <h1>Product 3</h1>
            <p class="price">Rp. 1.299.000</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="Deluxe.jpg" alt="Product 4">
            <h3>Chuck 70 De Luxe Heel</h3>
            <h1>Product 4</h1>
            <p class="price">Rp. 1.399.000</p>
            <button>Add to Cart</button>
        </div>
    
        <!-- Add more product cards as needed -->
    </section>
</main>

<!-- <footer>
    <div class="container">
        <p>&copy; 2024 Toko Online Saya. All rights reserved.</p>
    </div>
</footer> -->

</body>
</html>
