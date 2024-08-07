<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasklist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="https://i.ibb.co/x74SzZ2/techwave-favicon.png" rel="icon">
    <link href="https://i.ibb.co/fQppK8D/techwave-apple-touch-icon.png" rel="apple-touch-icon">
    <!-- My CSS -->
    <link rel="stylesheet" href="../styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body style="background-color: #D3F9FF;">

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"><img src="https://i.ibb.co/x74SzZ2/techwave-favicon.png"> TechWave</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
             
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav> -->

    <?php
      include_once('../nav-logged.php');
    ?>

    <div class="container-md text-center " style="max-width: 850px;">
        <div class="mb-5 hero-text">Tasklist</div>
        <form action="dbtask.php" method="POST" class="row g-3">
        <div class="col-4">
                <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Task Name" required/></input>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="caption" name="caption" placeholder="Caption" required></input>
            </div>
            <div class="col-1">
            <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg></button>
            
            </div>

            <div class="col-1">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>

</button>
            </div>
        </form>

        <!-- Modal -->
<div class="modal fade " id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="" method="GET">
          
        <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Spotlight Search" aria-label="Spotlight Search" aria-describedby="basic-addon2">
            <button class="input-group-text" id="basic-addon2" type="submit">Search</button>
        </div>
                
        </form>
      </div>
    </div>
  </div>
  </div>

<!-- Modal Ends -->

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Date Created</th>
                    <th>Task Name</th>
                    <th>Caption</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";
                $email=$_SESSION['userloggedin'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Check if a search request is made
                if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    if($search==''){
                        //All the records
                        $sql = "SELECT id,createdDate,taskName,caption FROM tasklist WHERE email = '$email' ORDER BY createdDate DESC";
                    }
                    $sql = "SELECT id,createdDate,taskName,caption FROM tasklist WHERE email = '$email' AND taskName LIKE '%$search%' ORDER BY createdDate DESC";
                }else{
                    // SQL query to select the desired columns from the "Employee" table
                    $sql = "SELECT id,createdDate,taskName,caption FROM tasklist WHERE email = '$email' ORDER BY createdDate DESC";
                }

                
                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        $taskName=$row["taskName"];
                        $cdate=$row["createdDate"];
                        // Display the data in table rows
                        echo "<tr>";
                        echo "<td class='p-3'>" . $row["createdDate"] . "</td>";
                        echo "<td class='p-3'><a href='../items/index.php?taskName=" . $taskName . "&cdate=" . $cdate . "'>" . $taskName . "</a></td>";
                        echo "<td class='p-3'>" . $row["caption"] . "</td>";
                        echo "<td class='p-3 delbtn'> <a class='btn btn-outline-danger' href=" . "dbtask.php?delid=" . $row["id"] . "> Delete
                        </a> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>

    </div>
   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>