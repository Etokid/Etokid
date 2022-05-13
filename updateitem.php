<?php
include 'adminheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
    <?php 
    include 'connection.php';
    $eid = $_GET['eid'];

    $sql = $db->prepare("SELECT * FROM products WHERE IID='$eid'");
    $sql->execute();

    $row=$sql->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>			<div class="card bg-light mb-3" style="margin-left: 50px; margin-right: 50px; ">
        <form action="editprocess.php" method="POST" enctype="multipart/form-data" class="mb-3" style="margin-left: 200px; margin-right: 200px; ">
            <input type="hidden" name="id" value="<?php echo $IID;?>">
         	<input class="form-control" type="text" name="name" value="<?php echo $name;?>"><br>
          	<input class="form-control"type="text" name="category" value="<?php echo $category;?>"><br>
          	<input class="form-control"type="text" name="price" value="<?php echo $price;?>"><br>
          	<div class="card" style="margin-left: 200px; margin-right: 200px; ">
            	<img src="images/<?php echo $photo;?>" style="margin-left: 20px; margin-right: 20px; width: 80%;" > <br>
            </div>
           	<label for="photo" sstyle="margin-left: 20px; margin-right: 20px;"><b>Photo</b></label>
            <input type="file" name="newimg"> <br>
            <input type="hidden" name="oldimg" value="<?php echo $photo;?>">
            	<button type="submit" class="btn btn-outline-success" name="submit">Update</button>
            	<a href="updatedelete.php"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
        </form>
        </div>

</body>
</html>