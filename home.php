<?php
include 'header.php';
include 'connection.php';
?>
    <!DOCTYPE html>
	<html lang="en">
	<head>
  		<title>Capital</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 		<style type="text/css"></style>
	</head>
	<body>
	
	<div class="col-sm-12">
        <!-- display products -->
   		<h3>
   		<div class="alert alert-primary" role="alert" align="center">Trending Products</div>
		</h3>
		
	    <div class="card-deck" >
        	<div class="card" >
        	<div class="row" >
        		<?php 
                 $sql=$db->prepare("SELECT * FROM products where category='Hot Products'");
                 $sql->execute();
                 while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                 extract($row);            
                 ?>
            	<div class="col-sm-4" align="center" >
              	<form method="post" action="manage_cart.php">
              	<img class="card-img-top" src="images/<?php echo $photo; ?>" width="100" height="400"><br>
              	<div class="card-body">
                  	Product Name : <?php echo $name; ?><br>
                 	Price : $<?php echo $price; ?><br>              
                  	<input type="hidden" name="name" value="<?php echo $name; ?>">
                  	<input type="hidden" name="price" value="<?php echo $price; ?>">
                  	<button type="submit" class="btn btn-info" name="buy">Add To Cart</button>
              	</div>
              	<div class="card-footer">
      				<small class="text-muted">www.Unique.com</small>
    			</div>
                </form>
            	</div>
          		<?php } ?>
        	</div>
       		</div>
        </div>
      </div>
          <!-- Site footer -->
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Untitled</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="home.css">
        </head>

		<body>
            <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Services</h3>
                                <ul>
                                    <li><a href="#">Mobile Phones</a></li>
                                    <li><a href="#">IT Products</a></li>
                                    <li><a href="#">Elcectronic Prodcuts</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>About</h3>
                                <ul>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Unique</h3>
                                <p>We create a culture of infinite possibilities. The deep trust and loyalty of our customers drives us to continually grow and lead innovation. We are expanding our highly differentiated mobile devices, as well as working hard to develop next-generation innovation. All researchers and developers throughout the world are working to discover the next life-changing technologies to create new values and make a better world.</p>
                            </div>
                                <div class="col item social">
                                <a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a>
                                <a href="http://www.twitter.com/"><i class="icon ion-social-twitter"></i></a>
                                <a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a>
                                <a href="www.instagram.com"><i class="icon ion-social-instagram"></i></a>
                            </div>
                        </div>
                        <p class="copyright">Unique<>2022</p>
                    </div>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        </body>
</html>