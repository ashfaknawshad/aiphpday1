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
    <link rel="stylesheet" href="styles.css">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="https://i.ibb.co/x74SzZ2/techwave-favicon.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    
                </ul>
                <form class="d-flex" role="search">
                    
                    <a href="logout.php" class="btn btn-outline-danger" >Logout</a>
                </form>
            </div>
        </div>
    </nav>



    <div class="mb-5 jumbotron">
        <h3 class="display-4 text-center mt-2 mb-2 ">TechWave Dashboard</h3>
        <hr class="my-4">
        <p class="text-center lead">We’re excited to have you on the team. Here, you can find all the tools and resources you need to succeed in your role. Stay tuned as more features will roll out in the near future!</p>
        
       
    </div>
    <div class="container mb-5">
    <div class="row justify-content-center ">
        
        
          
          
          <a class="col-4 dash-card card p-3 rounded-5 mr-5"  href="notes/index.php">
          <img src="https://i.ibb.co/Zc8LV1L/notes-app.png" class="card-img-top" alt="..."/>
          <h3 class="dash-card-text">Notes App</h3>
          </a>
          
        
   
            
        
          
          <a class="col-4 dash-card card p-3 rounded-5"  href="tasklist/index.php">
          <img src="https://i.ibb.co/9nkz1kW/reminder-icon.png" class="card-img-top" alt="..."/>
          <h3 class="dash-card-text">Task List</h3>
          </a>
          
        
   
            
        
    </div>
        
    </div>


   
          

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>