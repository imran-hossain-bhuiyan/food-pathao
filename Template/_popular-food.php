<!--===================Start popular-food Part===================-->
<section id="popular-food">
    <div class="container">
        <div class="title">
            <img src="./images/1.png">
            <h1>Our Popular Food Menu</h1>
            <p>The process of our service</p>
            <img src="./images/4.png">
        </div>
        <div class="food-menus card-group">
            <?php
              include './common/dbconnect.php';
              $sql="SELECT * FROM `our-item`";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
            ?>
            <div class="menu">
                <div class="price">৳<?php echo $row['item_price'];?></div>
                <div class="big_picture">
                    <img src="./common/<?php echo $row['image'];?>">
                    <!-- <img src="./images/cheeseburger.jpg"> -->
                </div>
                <div class="details">
                    <div class="small_picture">
                    <img class='border rounded-circle' src="./common/<?php echo $row['image'];?>" width="35px" height="35px">
                    </div>
                    <a href="#"><h1><?php echo $row['item_name'];?></h1></a>
                    <ul>
                        <div class="first">
                            <a href="#"><i class="fa-sharp fa-solid fa-star"></i></a>
                            <a href="#"><i class="fa-sharp fa-solid fa-star"></i></a>
                            <a href="#"><i class="fa-sharp fa-solid fa-star"></i></a>
                            <a href="#"><i class="fa-sharp fa-solid fa-star"></i></a>
                        </div>
                        <div class="last">
                            <a href="#"><i class="fa-sharp fa-solid fa-star"></i></a>
                        </div>
                    </ul>
                    <p>Delivery Time : 60 min, Free Delivery</p>
                </div>
                <div class="bottom">
                    <div class="button">
                        <a href="#">Add To Cart</a>
                    </div>
                    <div class="icon">
                        <a href="#"><i class="fa-regular fa-message"></i>03</a>
                        <a href="#"><i class="fa-regular fa-heart"></i>04</a>
                    </div>
                </div>
            </div>
            <?php }?>
          
        </div>
    </div>
</section>
<!--===================End popular-food Part===================-->
