<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="https://i.ibb.co/x74SzZ2/techwave-favicon.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <?php
               
                   
                
                    echo ' <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">TechWave</a>
                  </li>';
                
            ?>
           
            
            
                  
          </ul>
          <form class="d-flex" role="search">
       
          
            <?php 
                
                    echo'<a class="btn btn-outline-success me-2" href="../dashboard.php">Back to dashboard</a>';

                    echo'<a href="../logout.php" class="btn btn-outline-danger" >Logout</a>';
                
            ?>
            
            
          </form>
        </div>
      </div>
    </nav>