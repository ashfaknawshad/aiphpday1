<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Techwave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="https://i.ibb.co/x74SzZ2/techwave-favicon.png" rel="icon">
    <link href="https://i.ibb.co/fQppK8D/techwave-apple-touch-icon.png" rel="apple-touch-icon">
    <!-- My CSS -->
    <style>
      body {
          background-color: #333;
          color: #fff;
      }
      .hero-text {
            text-align: center;
            color: #333;
            font-size: 5rem;
            margin-top: 10vh;
            font-weight: 100;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #D3F9FF;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="https://i.ibb.co/x74SzZ2/techwave-favicon.png"> TechWave</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>



    <div class="container mb-5">
        <h3 class="display-4 text-center mt-5 mb-4">TechWave Dashboard</h3>
        <hr class="my-4">
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.ibb.co/VCxgsrr/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Custom Software Development</h5>
                        <p class="card-text">Tailored solutions designed to meet your  needs. Our expert developers will work with you to create software that enhances your operations and drives success.</p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.ibb.co/Gc71Bt8/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Scalable, secure, and efficient cloud services that grow with your business. Transition to the cloud with ease and enjoy increased flexibility and collaboration.</p>
                        <a href="#" class="btn btn-dark">Explore Cloud Services</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.ibb.co/mc6cPBS/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AI Integration</h5>
                        <p class="card-text">Harness the power of artificial intelligence to optimize your processes and gain insights. Our AI solutions help you stay ahead in a competitive market.</p>
                        <a href="#" class="btn btn-dark">Discover AI Solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
          

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>