<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Techwave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="https://i.ibb.co/x74SzZ2/techwave-favicon.png" rel="icon">
    <link href="https://i.ibb.co/fQppK8D/techwave-apple-touch-icon.png" rel="apple-touch-icon">
    <!-- My CSS -->
    <link rel="stylesheet" href="styles.css">
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
                <a class="nav-link active" href="#">Register</a>
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
        <h3 class="display-4 text-center mt-5 mb-4">Techwave Employee Registration</h3>
     
        <hr class="my-4">
    </div>
    <div class="container">
        <form action="dbregister.php" method="POST" class="regform mb-5 text-center ">
          <div class="form-group mb-2">
            
            <input type="email" class="form-control text-center" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

            <div class="mb-4 ">
             
              <input type="text" class="form-control data-in text-center" id="firstName" name="fname" aria-describedby="firstNameHelp" placeholder="First Name">
            </div>
            <div class="mb-4">
              
              <input type="text" class="form-control data-in text-center" id="lastName" name="lname" aria-describedby="lastNameHelp" placeholder="Last Name">
            </div>
            <div class="mb-4">
              
              <input type="number" class="form-control data-in text-center" id="salary" name="salary" aria-describedby="salaryHelp" placeholder="Salary">
            </div>
            <div class="mb-4">
              
              <input type="tel" class="form-control data-in text-center" id="mobileNumber" name="phone" aria-describedby="mobileNumberHelp" placeholder="Mobile Number">
            </div>
            <div class="mb-4">
              
              <input type="date" class="form-control data-in text-center" id="date" name="dob" placeholder="Date of Birth">
            </div>
            <div class="mb-4">
              <div><label for="gender" class="form-label">Gender</label></div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                <label class="form-check-label" for="male">
                  Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input " type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">
                  Female
                </label>
              </div>
            </div>
            <div class=" row mb-4">
                <div class="col-md-6">
                    <button type="submit" class="btn submit-btn btn-dark">Create Account</button>
                </div>
                <div class="col-md-6 text-md-right">
                  Returning user? <a href="login.php">Sign in!</a>
                </div>
              </div>
             
        </form>
        <?php

        if(isset($_GET['error'])) {
          echo('
           <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              User with this email already exists
          </div>');
        }
        
        ?>
        
    </div>
          

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>