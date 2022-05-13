<?php

include 'adminheader.php';
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
  <style type="text/css">
    
    
  </style>
  </head>
  <body>
  <div class="card text-white bg-info mb-3 " align="center" style="margin-left: 100px; margin-right: 100px; ">
  <div class=" badge-info" role="alert">
  <div class="card-header"><span class="alert alert-info badge"><h3>Products Add</h3></span></div>
  </div>
  <div class="card-body">
      		<center>
              <form method="post" class="mb-3" enctype="multipart/form-data" action="addmanage.php">
              <input class="form-control" type="text" placeholder="Insert Products Model" name="name"><br>
              
  <div class="input-group mb-3">
  <select class="form-control form-control-sm" name="category">
    <option selected>Choose...</option>
    <option value="IT">IT</option>
    <option value="Electronic">Electronic</option>
    <option value="MB">Mobile</option>
    <option value="Hot Products">Hot Products</option>
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">Category</label>
  </div>
</div>
<input class="form-control"type="text" placeholder="Product Cost" name="price"><br>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload Photo</span>
  </div>
  
  <div class="custom-file">
    <input type="file" class="form-control" id="inputGroupFile01" name="image" placeholder="Choose file">

  </div>
</div>
              <button class="button" style="float:right;" name="submit" type="submit">Add Product</button>
              </form>
              
        </center>
</div>
<div class="card-footer">
      <small class="text-muted">WWW.Unique.Com</small>
    </div>

  </body>