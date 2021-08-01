<?php
  
  include('partial-front/menu.php');

?>

<?php

//check whether id is passed or not
if(isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];
    //get the category title based on category id
    $sql = "SELECT title FROM tbl_category WHERE id=$category_id";
    $res = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($res);
    $category_title = $rows['title'];
}
else{
    header('location:'.SITEURL);
}

?>

    <!-- blog sEARCH Section Starts Here -->
    <section class="blog-search text-center">
        <div class="container">
            
            <h2>Search on <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>
    <!-- blog sEARCH Section Ends Here -->



    <!-- blog MEnu Section Starts Here -->
    <section class="blog-menu">
        <div class="container">
            <h2 class="text-center">Blogs</h2>
            <?php 
                //sql qury to get blog based on selected category
                $sql2 = "SELECT * FROM tbl_blog WHERE category_id = $category_id";
                $res2= mysqli_query($conn,$sql2);
                $count2 = mysqli_num_rows($res2);
                if($count2>0){
                    while($row2=mysqli_fetch_assoc($res2)){
                        $id=$row2['id'];
                        $title = $row2['title'];
                   
                        $discription = $row2['discription'];
                        $image_name = $row2['image_name'];
                        ?>
                            <div class="blog-menu-box">
                                <div class="blog-menu-img">
                                <?php
                                     if($image_name==""){
                                        //image not available
                                        echo "<div class='error'>image not available<?div>";
                                    }else{
                                        ?>
                                         <img src="<?php echo SITEURL?>images/blog/<?php echo $image_name?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            
                                        <?php
            
                                    }
                                ?>
                                   
                                </div>

                                <div class="blog-menu-desc">
                                    <h4><?php echo $title ; ?></h4>
                                  
                                    <p class="blog-detail">
                                    <?php echo $discription ; ?>
                                    </p>
                                    <br>

                                    <a href="<?php echo SITEURL;?>fullblog.php" class="btn btn-primary">Know more</a>
                                </div>
                            </div>


                        <?php
                    }
                }else{
                    echo "<div class='error'>Blog not avaible</div>";
                }

?>

            
          


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!--  Blog Section Ends Here -->

    <?php
      include('partial-front/footer.php');
  ?>