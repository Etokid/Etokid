<?php

include 'adminheader.php';
include 'connection.php';
$sql=$db->prepare("SELECT * FROM products");
$sql->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Capital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">

  </style>
</head>
<body>
  
  <div class="container-fluid">
  <div class="alert alert-info" role="alert">
  <center><h1>Update/Delete Products</h1></center>
  </div>
  <div class="alert alert-info" style="margin-left: 50px; margin-right: 50px; ">
  <center>
  <table class="table">
     <thead class="text-center">
      <div class="card-body">
      <tr>
       <th scope="col">Products model</th>
       <th scope="col">Category </th>
       <th scope="col">Products Cost</th>
       <th scope="col">Photo</th>
        <th scope="col">Update</th>
       <th scope="col">Delete</th>
      </tr>
      </div>
     </thead>
     
     <tbody class="text-center">
                        <?php 
                            while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                        <tr>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $category; ?></td>
                            <td>$<?php echo $price; ?></td>
                            <td><img src="images/<?php echo $photo ?>" width="100" height="100"></td>
                         <td><a href="updateitem.php?eid=<?php echo $IID;?>"><button type="submit" class="btn btn-outline-success" style="width: 100px;">UPDATE</button></a></td>
                            <td><a href="delete.php?did=<?php echo $IID;?>"><button type="submit" class="btn btn-outline-danger" style="width: 100px;">DELETE</button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
    </table>
    <div class="card-footer">
      <small class="text-muted">www.unique.com</small>
    </div>
  </center>
  </div>
  
  </div>

</body>
</html>