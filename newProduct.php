<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <?php require_once 'process.php'; ?>

    <h1>Add New Product</h1>

    <form class="" action="process.php" method="post" enctype="multipart/form-data">
      <label>Name</label>
      <input type="text" name="name" value="" placeholder="Product name">
      <br>
      <label >Price</label>
      <input type="number" name="price" step="0.01" value="" placeholder="Product price">
      <br>
      <label >Description</label>
      <input type="text" name="description" value="" placeholder="Description">
      <br>
      <label >Photo</label>
      <input type="file" name="photo" value="">
      <br>
      <label >Category</label>
      <input type="number" name="category" step="1" value="">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>


  </body>
</html>
