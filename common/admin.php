<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $item_name= $_POST['item_name'];
   $item_price= $_POST['item_price'];
   $file=$_FILES['filename'];
     $nowTime = strtotime(date("Y-m-d H:i:s"));
              $fileName=$file['name'];
              $filePath=$file['tmp_name'];
              $filePath=$file['tmp_name'];
              $fileError=$file['error'];
              $explode=explode(".",$fileName);
              $extension = end($explode);
              $allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'webp');
              if($fileError==0 && in_array($extension,$allowed_extension)){
                $newImageName = $nowTime.".".$extension;
                 $destFile="image/".$newImageName;
                 move_uploaded_file($filePath,$destFile);
                 $inertsql="INSERT INTO `our-item`(`item_name`, `item_price`, `image`) VALUES ('$item_name','$item_price','$destFile')";
                $result=mysqli_query($conn,$inertsql);
                if($result){
                  echo 'data inserted successfully';    
                }
                else{
echo 'hi';
                }
              }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css" >
  </head>
  <body>
    <div class="text text-center p-5"><h2>Admin Panel</h2></div>
    <div class="container">
      <div class="left">
      <button type="button" class="btn btn-primary my-5 mx-auto add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Item</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Item Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action='' method='post' enctype="multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-left">Add Item:</label>
            <input type="text" class="form-control" id="recipient-name" name='item_name'>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label text-left">Price:</label>
            <input type="text" class="form-control" id="recipient-name" name='item_price'>
            
          </div>
          <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name='filename'>
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
          <button type="submit" class="btn btn-primary ">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <a href="logout.php" class="btn btn-secondary log-out">Log Out</a>
      </div>
      <div class="right">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Item Name</th>
          <th scope="col">Price</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <?php
        $sql="SELECT * FROM `our-item`";
        $sno=0;
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $sno=$sno+1;
      
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $sno;?></th>
          <td><?php echo $row['item_name'];?></td>
          <td><?php echo $row['item_price'];?></td>
          <td><a href='update.php?id=<?php echo $row['id'];?>' class="btn btn-success">Update</button></td>
          <td><a href='delete.php?id=<?php echo $row['id'];?>'class="btn btn-danger">Delete</a></td> 
        </tr>
        
      </tbody>
      <?php }?>
    </table>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
