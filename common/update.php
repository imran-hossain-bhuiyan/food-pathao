<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
$id=$_GET['id'];

$upate_price=$_POST['upate_price'];
$upate_item=$_POST['upate_item'];
$sql="UPDATE `our-item` SET `item_name`='$upate_item',`item_price`='$upate_price' WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);

if($result){
    header("Location: admin.php");
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/update.css" >
  </head>
  <body>
    <div class="style">
        
    <h2>Update Product</h2>
    <div class="container">
    <form action='' method='post'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='upate_item'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='upate_price'>
  </div>
  <p>Product Picture:</p>
  <div class="input-group mb-3">
  
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
  <div class="button">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  
</form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>