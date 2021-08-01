<?php
  
  include('partial-front/menu.php');

?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="blog-search text-center">
        <div class="container">
        <?php
        $search = $_POST['search'];

        ?>
            
            <h2>Content on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- blog sEARCH Section Ends Here -->



    <!-- blog MEnu Section Starts Here -->
    <section class="blog-menu">
        <div class="container">
            <h2 class="text-center">Blogs</h2>
            <?php 
              //get the search keyword
              
              //sql query to get blog based on search keyword
              $sql = "SELECT * FROM tbl_blog WHERE title LIKE '%$search%' OR discription LIKE '%$search%'";

              $res = mysqli_query($conn,$sql);
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
                        echo "<div class='error'>Image not avaible</div>";
                }else{
                    ?>
                          <img src="<?php echo SITEURL;?>images/blog/<?php echo $image_name?>" alt="image" class="img-responsive img-curve">
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

                    <a href="#" class="btn btn-primary">Full View</a>
                </div>
            </div>

                <?php

              }
            }
              
              else{
                echo "<div class='error'>Blog not found</div>";
              }
            ?>

            
           

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- Blog Section Ends Here -->

    <?php
      include('partial-front/footer.php');
  ?>