<?php
  
  include('partial-front/menu.php');

?>
<br>
<br>
<br>
<nr>
    <!-- blogsEARCH Section Starts Here -->
    <section class="blog-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL;?>blog-search.php" method="POST">
                <input class="search_option" type="search" name="search" placeholder="Search for Content.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- blog sEARCH Section Ends Here -->



    <!-- blog MEnu Section Starts Here -->
    <section class="blog-menu">
        <div class="container">
            <h2 class="text-center">Blogs</h2>

            <?php
            //display blog that are active
            $sql = "SELECT *FROM tbl_blog WHERE active ='yes'";

            $res=mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
            if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $discription=$row['discription'];
                       
                        $image_name=$row['image_name'];
                        ?>
                         <div class="blog-menu-box">
                    <div class="blog-menu-img">
                    <?php
                        if($image_name==""){
                            //image not available
                            echo "<div class='error'>image not available<?div>";
                        }else{
                            ?>
                             <img src="<?php echo SITEURL?>images/blog/<?php echo $image_name?>" alt="image" class="img-responsive img-curve">

                            <?php

                        }
                    ?>
                       
                    </div>

                    <div class="blog-menu-desc">
                        <h4><?php echo $title;?></h4>
                        
                       
                        <p class="blog-detail">
                        <?php echo $discription;?>
                        </p>
                        
                        <br>

                        <a href="<?php echo SITEURL;?>fullblog.php" class="btn btn-primary">Know more</a>
                    </div>
            </div>
                        <?php
                    }
            }else{
                echo "<div class='error'>blog not found</div>";
            }

?>

           



            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- blog Menu Section Ends Here -->

    <?php
      include('partial-front/footer.php');
  ?>