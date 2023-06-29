<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My E-commerce Store</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Link to Tailwind CSS CDN -->
   <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
      opacity: 70%;
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
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>

@include('includes/navbar')

  </header>

  <!-- Hero Section -->
  <section class="hero bg-[url('/images/logo.jpg')]">
    <div class="container mx-auto">
      <h1 class="text-4xl mb-4">Welcome</h1>
      <p class="text-lg mb-8">Discover the best products for your needs.</p>
      <a style="background-color: black" href="{{ url('/register') }}" class="btn z-50">Join us</a>
    </div>
  </section>

  <!-- Featured Products Section -->
  <section class="featured-products">
    <div class="container mx-auto">
      <h2 class="text-2xl mb-8">Featured Products</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Display your featured products here -->
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod1.jpg" alt="Product 1" class="mb-4">
          <h3 class="text-lg">Product 1</h3>
          <p class="text-gray-700">$19.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod2.jpg" alt="Product 2" class="mb-4">
          <h3 class="text-lg">Product 2</h3>
          <p class="text-gray-700">$24.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod3.jpg" alt="Product 3" class="mb-4">
          <h3 class="text-lg">Product 3</h3>
          <p class="text-gray-700">$29.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod4.jpg" alt="Product 3" class="mb-4">
          <h3 class="text-lg">Product 4</h3>
          <p class="text-gray-700">$29.99</p>
          <a href="#" class="btn mt-4">Add to Cart</a>
        </div>
        <div class="bg-white p-4 shadow-md">
          <img src="./images/products/featured/prod5.jpg" alt="Product 3" class="mb-4">
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
</body>
</html>
