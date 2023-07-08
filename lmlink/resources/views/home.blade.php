<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My E-commerce Store</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Link to Tailwind CSS CDN -->
   <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <style>
    /* Custom Styles */
    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #061733;
      padding: 10px;
    }

    nav ul li a {
      color: white;
      padding: 10px;
      text-decoration: none;
    }

    .hero {
      background-image: url('./images/logo.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      color: white;
      padding: 50px;
      text-align: center;
    }

    .hero h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      background-color: #061733;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }

    .featured-products {
      padding: 50px;
      text-align: center;
    }

    .featured-products h2 {
      font-size: 24px;
    }
    .carousel-container {
  position: relative;
  width: 100%;
  height: 500px; /* Adjust the height as needed */
  overflow: hidden;
}

.carousel-slide {
  position: relative;
  display: none;
}

.carousel-image {
  width: 100%;
  height: auto;
  object-fit: contain;
  object-position: center;
}

.carousel-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
  font-size: 24px;
  text-align: center;
  z-index: 1;
  width: 80%
}
.carousel-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as desired */
  z-index: 0;
}

.hide-dots .slick-dots {
  display: none;
}
@media (max-width: 767px) {
  .carousel-image {
    object-fit: cover;
  }
}


  </style>
</head>
<body>
  <!-- Header Section -->
  <header>

@include('includes/navbar')

  </header>
<div class="carousel-container">
  <div class="carousel-slide">
    <img class="carousel-image" src="{{ asset('images/background/back8.jpg') }}" alt="Image 1">
    <div class="carousel-overlay"></div>
    <div class="carousel-text">
      <h2>Text for Image 1</h2>
    </div>
  </div>

  <div class="carousel-slide">
    <img class="carousel-image" src="{{ asset('images/background/back9.jpg') }}" alt="Image 2">
    <div class="carousel-overlay"></div>
    <div class="carousel-text">
      <h2>Text for Image 2</h2>
    </div>
  </div>

  <div class="carousel-slide">
    <img class="carousel-image" src="{{ asset('images/background/back7.jpg') }}" alt="Image 3">
    <div class="carousel-overlay"></div>
    <div class="carousel-text">
      <h2>Text for Image 3</h2>
    </div>
  </div>
</div>



  <!-- Featured Products Section -->
  <section class="featured-products">
    <div class="container mx-auto">
      <h2 class="text-2xl mb-8">Featured Products</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-8 gap-8">
        <!-- Display your featured products here -->
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod1.jpeg" alt="Product 1" class="mb-4">
          <h3 class="text-lg">Product 1</h3>
          <p class="text-gray-700">$19.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod2.jpeg" alt="Product 2" class="mb-4">
          <h3 class="text-lg">Product 2</h3>
          <p class="text-gray-700">$24.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod3.jpeg" alt="Product 3" class="mb-4">
          <h3 class="text-lg">Product 3</h3>
          <p class="text-gray-700">$29.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod4.jpeg" alt="Product 3" class="mb-4">
          <h3 class="text-lg">Product 4</h3>
          <p class="text-gray-700">$29.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod5.jpeg" alt="Product 3" class="mb-4">
          <h3 class="text-lg">Product 5</h3>
          <p class="text-gray-700">$29.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-gray-200 py-4">
    <div class="container mx-auto">
      <p class="text-center">&copy; 2023 LMLINK Store. All rights reserved.</p>
      <ul class="flex justify-center mt-4">
        <li class="mr-4"><a href="#">Terms of Service</a></li>
        <li class="mr-4"><a href="#">Privacy Policy</a></li>
        <li class="mr-4"><a href="#">Refund Policy</a></li>
      </ul>
    </div>
  </footer>

  <script>
    // JavaScript for carousel functionality (using a library like jQuery or vanilla JS)
    // You can use libraries like Slick Carousel, Owl Carousel, or create your own implementation.
    // Here's a basic example using jQuery and Slick Carousel:

    $(document).ready(function() {
      $('.carousel-container').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000 // Adjust the speed as needed (in milliseconds)
      });
    });
      // Hide dots on mobile devices
  if (window.innerWidth <= 767) {
    document.querySelector('.carousel-container').classList.add('hide-dots');
  }
  </script>
</body>
</html>
