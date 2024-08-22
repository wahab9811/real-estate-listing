<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Custom Styles */
    .navbar-custom {
      background-color: #003d6a; /* Deep Navy */
    }
    .navbar-custom .navbar-brand {
      color: #f5a623; /* Rich Gold */
    }
    .navbar-custom .nav-link {
      color: #f5f5f5; /* Soft White */
    }
    .navbar-custom .nav-link.active, .navbar-custom .nav-link:hover {
      color: #f5a623; /* Rich Gold */
    }
    .footer {
      background-color: #003d6a; /* Deep Navy */
      color: #f5f5f5; /* Soft White */
    }
    .footer-logo a {
      color: #f5a623; /* Rich Gold */
      font-size: 2rem;
      font-weight: bold;
    }
    .footer-links a {
      color: #f5f5f5; /* Soft White */
      text-decoration: none;
    }
    .footer-links a:hover {
      color: #f5a623; /* Rich Gold */
    }
    .footer-social a {
      color: #f5f5f5; /* Soft White */
      margin-right: 20px;
      font-size: 1.75rem;
    }
    .footer-social a:hover {
      color: #f5a623; /* Rich Gold */
    }
    .carousel-caption h5 {
      color: #f5a623; /* Rich Gold */
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-custom navbar-light">
  <a class="navbar-brand" href="index.php">Real Estate</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="property-listing.html">Property Listings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agent-profile.html">Agent Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-form.html">Contact</a>
      </li>
    </ul>
    <div class="ms-auto d-flex align-items-center">
      <a href="sign-up.php" class="btn btn-outline-light me-2">Sign Up</a>
      <a href="sign-in.php" class="btn btn-warning text-dark">Sign In</a>
    </div>
  </div>
</nav>

<!-- Hero Section with Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\download.jpg" class="d-block w-100" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Your Dream House</h5>
        <p>Best House To Live.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\download2.jpg" class="d-block w-100" alt="Second Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Place To Live</h5>
        <p>Best Place To Enjoy Your Life.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\download3.jpg" class="d-block w-100" alt="Third Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>House That We Live Together</h5>
        <p>Enjoy Your Life With Your Family.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- Container with Two Sections -->
<div class="container my-5">
  <div class="row">
    <!-- About Section -->
    <div class="col-md-6">
      <h1 class="text-3xl font-bold mb-4">About Us</h1>
      <p class="mb-4">
        Welcome to our real estate website! We offer a wide range of properties that suit your needs, whether you're looking to buy, sell, or rent. Our team of professionals is dedicated to providing you with exceptional service and expert advice to help you make the best decision for your future.
      </p>
      <p>
        Explore our listings to find your perfect home today! We are committed to helping you through every step of the real estate process with transparency and integrity.
      </p>
    </div>

    <!-- Carousel Section -->
    <div class="col-md-6">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#imageCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#imageCarousel" data-bs-slide-to="2"></li>
          <li data-bs-target="#imageCarousel" data-bs-slide-to="3"></li>
          <li data-bs-target="#imageCarousel" data-bs-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images\image1.jpg" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="images\image2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="images\image3.jpg" class="d-block w-100" alt="Image 3">
          </div>
          <div class="carousel-item">
            <img src="images\image4.jpg" class="d-block w-100" alt="Image 4">
          </div>
          <div class="carousel-item">
            <img src="images\image5.jpg" class="d-block w-100" alt="Image 5">
          </div>
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer py-5">
  <div class="container">
    <div class="row">
      <!-- Logo Section -->
      <div class="col-md-3 mb-4 footer-logo">
        <a class="navbar-brand" href="index.php">Real Estate</a>
        <p class="mt-3">Your trusted real estate partner. Helping you find the perfect property with ease.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3 mb-4 footer-links">
        <h5 class="font-semibold mb-3">Quick Links</h5>
        <a href="index.php" class="d-block mb-2">Home</a>
        <a href="property-listing.html" class="d-block mb-2">Property Listings</a>
        <a href="agent-profile.html" class="d-block mb-2">Agent Profile</a>
        <a href="contact-form.html" class="d-block mb-2">Contact</a>
      </div>

      <!-- Contact Information -->
      <div class="col-md-3 mb-4 footer-contact">
        <h5 class="font-semibold mb-3">Contact Us</h5>
        <p><i class="fas fa-map-marker-alt"></i> 123 Real Estate St, City, Country</p>
        <p><i class="fas fa-phone"></i> +1 234 567 890</p>
        <p><i class="fas fa-envelope"></i> info@realestate.com</p>
      </div>

      <!-- Social Media Links -->
      <div class="col-md-3 mb-4 footer-social">
        <h5 class="font-semibold mb-3">Follow Us</h5>
        <div class="flex space-x-4">
          <a href="#" class="text-white hover:text-gold"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white hover:text-gold"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white hover:text-gold"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white hover:text-gold"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
