<?php

  session_start();
  $mysqli=new mysqli ('localhost','root','','onion') or die(mysqli_error($mysqli));

  $name='';
  $price=0;
  $description='';
  $photo=null;
  $category=0;

  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $price=$_POST['price'];
      $description=$_POST['description'];
      $photo=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
      $category=$_POST['category'];

      $mysqli->query("INSERT INTO product(name,price,description,photo,category_fk) VALUES ('$name','$price','$description','$photo','$category')") or die($mysqli->error);
      header("location: newProduct.php");
  }


 ?>
