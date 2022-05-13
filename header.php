<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="Home.php" ><img alt="logo" src="images/logo.JPG" style="width: 30%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto" >
          <li class="nav-item">
            <a class="nav-link" href="home.php" ><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewproducts.php"><b>View products</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php"><b>Contact Us</b></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
 
    <img src="images/HH.png" style="width: 100%; height: 450px;" >
  
     	<nav class="navbar navbar-expand-sm " style="float: height: 80px;">
    <div class="container-fluid" >
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar" >
      
        <?php
        	$count=0;
        	if (isset($_SESSION['cart'])) {
        		$count=count($_SESSION['cart']);
        	}
        ?>
        <a href="mycart.php" class="btn btn-outline-info" style="padding: 5px;">My Cart (<?php echo $count; ?>)</a>
      
      </div>
    </div>
  </nav>
  
</body>
</html>