<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
$name= $_POST['admin_name'];
$pass= $_POST['admin_pass'];
$sql='SELECT * FROM `adminlogin`';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$adminname=$row['userName'];
$adminpass=$row['pass'];
if($adminpass==$pass){
    session_start();
    header('location:admin.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/adminlogin.css">
    <title>Login&registration form </title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <div class="logo">
                        <img src="../images/navlogo.png" alt="">
                    </div>
                    <h2>Admin   LogIn</h2>
                    <form action="" method='post'>
                        <input  class="input-box" placeholder="Your Email ID" name='admin_name' required>
                        <input type="password" class="input-box" placeholder="Password" name='admin_pass' required>
                        <button type="submit" class="submit-btn">SUBMIT</button>
                        <!-- <input type="checkbox"><span>Remember password</span> -->
                    </form>
                </div>
              
            </div>
        </div>
    </div>


    

    <script>
        var card = document.getElementById("card");
        
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }

    </script>

    
</body>
</html>