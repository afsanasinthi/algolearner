<?php
include('partial/menu.php');
?>
        <!-- content start -->
        <div class="menu_content">
        <div class="wrapper">
                <h1>DASHBOARD</h1>

                <?php
          if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
          }


?>
               <div class="col-4 text-center">
               <?php 
                    $sql = "SELECT * FROM tbl_category";
                    $res=mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
               ?>
                   <h1><?php echo $count;?></h1>
                   <br>
                   category
               </div>
               <div class="col-4 text-center">

               <?php 
                    $sql2 = "SELECT * FROM tbl_blog";
                    $res2=mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
               ?>

                   <h1><?php echo $count2;?></h1>
                   <br>
                   Blogs
               </div>
               <div class="col-4 text-center">
               
               <?php 
                    $sql2 = "SELECT * FROM users";
                    $res2=mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
               ?>

                   <h1><?php echo $count2;?></h1>
                   <br>
                   Users
               
                 
               </div>
               <div class="col-4 text-center">
               <?php 
                    $sql2 = "SELECT * FROM questions";
                    $res2=mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
               ?>

                   <h1><?php echo $count2;?></h1>
                   <br>
                   Total questions 
               
               </div>
               
               <div class="clrfix"></div>
            </div>
            </div>
        <!-- content end -->
       <?php
       include('partial/footer.php')
       ?>
       
    </body>
</html>
