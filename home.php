<?php
  
  include('partial-front/menu.php');

?>
   <?php
          if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
          }


?>
   
  <section id="banner_part">

<div class="banner_item">
    <iframe width="100%" height="700px" src="https://momento360.com/e/u/8aabb69592fb443f98818865078f97a0?utm_campaign=embed&utm_source=other&heading=280.18&pitch=-8.86&field-of-view=75&size=medium" frameborder="0">
        </iframe>
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div class="banner_text">

                    <h2>Welcome to </h2>
                    <h1>AlgoLearner</h1>
                    <p>Getting service anytime anywhere is easier than ever.Learn with us and explore more </p>
                    <a href="<?php echo SITEURL;?>Blogs.php" style="margin-right: 30px;">ContactUs</a>
                    <a href="#">About</a>

                </div>
            </div>
        </div>
    </div>
</div>


</section>
        
    <!-- blog sEARCH Section Starts Here -->
    
    <section class="blog-search text-center " >  
        <div class="container">          
            <form action="<?php echo SITEURL; ?>blog-search.php" method="POST">
                <input class="search_option" type="search" name="search" placeholder="Search for content.." required>
                
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!--  sEARCH Section Ends Here -->
    <?php
     if(isset($_SESSION['order'])){
         echo $_SESSION['order'];
         unset($_SESSION['order']);
     }
    ?>

      <!-- about part start -->
    <section id="about_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_video">
                        <img src="image/food banner.jpg" style="width: 100%;" alt="">
                        <div class="overlay"><video width="400px" height="400px" controls autoplay>
                         <source src="video/vi.mp4" type="video/mp4">
                            </video></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text">
                        <h2>ABOUT US</h2>
                      
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, doloribus.

                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eaque veritatis dicta explicabo officiis quod eius ullam! Impedit, illum, omnis placeat ipsum fugiat quaerat voluptatum libero distinctio nostrum eaque officiis!</span>
                            <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eaque veritatis dicta explicabo officiis quod eius ullam! Impedit, illum, omnis placeat ipsum fugiat quaerat voluptatum libero distinctio nostrum eaque officiis!
                           </span>
                            <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eaque veritatis dicta explicabo officiis quod eius ullam! Impedit, illum, omnis placeat ipsum fugiat quaerat voluptatum libero distinctio nostrum eaque officiis!</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- about part end -->
<!-- Extra elements start -->

<section id="team_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="team_head">
                        <h2>Articals</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img width="350px" height="200px" src="images/insertionsort.gif" alt="">
                            <div class="overly">
                            <div style = "margin:70px;" align="center">
                            <form action="<?php echo SITEURL; ?>fullblog.php" method="POST" >                                   
                                    <input type="submit" name="Button" value="Know more+" class="btn btn-primary">
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Insertion Sort</h4>
                            <h5>To sort an array of size n in ascending order</h5>
                            <p>Insertion sort is a simple sorting algorithm that works similar to the way you sort playing cards in your hands. The array is virtually split into a sorted and an unsorted part.</p>
                            <section class="blog-search text-center " >  
                                   
                               

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img width="350px" height="200px" src="images/margesort.gif" alt="">
                            <div class="overly">
                            <div style = "margin:70px;" align="center">
                            <form action="<?php echo SITEURL; ?>restaurant.php" method="POST" >                                   
                                    <input type="submit" name="Button" value="Know more+" class="btn btn-primary">
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Merge sort</h4>
                            <h5>Divide the unsorted list into n sublists, each containing one element </h5>
                            <p>In computer science, merge sort (also commonly spelled as mergesort) is an efficient, general-purpose, and comparison-based sorting algorithm </p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img width="350px" height="200px" src="images/bubblesort.gif" alt="">
                            <div class="overly">
                            <div style = "margin:70px;" align="center">
                            <form action="<?php echo SITEURL; ?>restaurant.php" method="POST" >                                   
                                    <input type="submit" name="Button" value="Know more+" class="btn btn-primary">
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Bubble Sort</h4>
                            <h5>Bubble Sort is a sorting algorithm where we repeatedly iterate through the array and swap adjacent elements that are unordered.</h5>
                            <p>Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent elements if they are in wrong order.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="team_inner">
                        <div class="team_img">
                            <img src="images/team-1.jpg" alt="">
                            <div class="overly">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Team 4</h4>
                            <h5>Team member, AlgoLearner</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, iusto. </p>
                            <p></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
<!-- Extra elements end -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore More</h2>
            

            <?php

            //create sql quary to display category from database
            $sql="SELECT * FROM tbl_category WHERE active='yes' AND featured='yes' LIMIT 3";
            $res = mysqli_query($conn,$sql);

            $count = mysqli_num_rows($res);
            if($count>0){
                 while($row=mysqli_fetch_assoc($res)){
                     $id = $row['id'];
                     $title = $row['title'];
                     $image_name = $row['image_name'];
                     ?>

            <a href="<?php echo SITEURL;?>category-blogs.php?category_id=<?php echo $id;?>">
                <div class="box-3 float-container">
                    <?php
                        if($image_name==""){
                            echo "<div class='error'>image not available</div>";
                        }else{
                            ?>
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name ;?>" alt="image" class="img-responsive img-curve">
                            <?php
                        }
                    ?>
                   
                    <h3 class="float-text text-white"><?php echo $title;?></h3>
                </div>
            </a>


            <?php
                 }
            }
            else{
                echo"<div class='error'> Category not added.</div>";
            }

            ?>

           

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- Blog Section Starts Here -->
    <section class="blog-menu" >
        <div class="container">
            <h2 class="text-center">Blogs</h2>
           
            

            <?php
            //Getting blog from database
            $sql2 = "SELECT *FROM  tbl_blog WHERE active='yes' AND featured='yes' LIMIT 6";

            $res2 = mysqli_query($conn,$sql2);
            $count2 = mysqli_num_rows($res2);
            if($count2>0)
            {
                while($row=mysqli_fetch_assoc($res2))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                   
                    $discription = $row['discription'];
                    $image_name = $row['image_name'];

                    ?>
                 <div class="blog-menu-box" >
                    <div class="blog-menu-img">
                    <?php
                        if($image_name==""){
                            echo "<div class='error'>image not available</div>";

                        }else{
                            ?>
                            <img src="<?php echo SITEURL?>images/blog/<?php echo $image_name;?>" alt="image" class="img-responsive img-curve">
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
                echo "<div class='error'>food not available.</div>";
            }


?>

         

           

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="Blogs.php">See All Blogs</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
     <!-- Team part start -->

    <section id="team_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="team_head">
                        <h2>Our Team</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img src="images/team-4.jpg" alt="">
                            <div class="overly">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Team 1</h4>
                            <h5>Team member, AlgoLearner</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, officia. </p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img src="images/team-2.jpg" alt="">
                            <div class="overly">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Team 2</h4>
                            <h5>Team member, AlgoLearner</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, iusto. </p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_inner">
                        <div class="team_img">
                            <img src="images/team-3.jpg" alt="">
                            <div class="overly">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Team 3</h4>
                            <h5>Team member, AlgoLearner</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, iusto.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="team_inner">
                        <div class="team_img">
                            <img src="images/team-1.jpg" alt="">
                            <div class="overly">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_text">
                            <h4>Team 4</h4>
                            <h5>Team member, AlgoLearner</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, iusto. </p>
                            <p></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>


<!--  Team part end -->
<!--  Review part start -->
    <section id="Review">
        <div class="gallry_head">
            <h2>Review</h2>
           
        </div>
        <div class="text_banner" style="background: url(image/tesimonial-background.jpg);">
            <div class="container">
                <div class="row  slider">

                    <div class="col-lg-6">
                        <div class="text_inner">
                            <img src="images/client-1.jpg" alt="">
                            <h4>Shahed</h4>
                            <h5>Good to try, won't be disappointed at all</h5>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>

                        </div>
                        <div class="text_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, libero.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text_inner">
                            <img src="images/client-2.jpg" alt="">
                            <h4>Nadia</h4>
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>

                        </div>
                        <div class="text_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dicta.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text_inner">
                            <img src="images/client-3.jpg" alt="">
                            <h4>Nabila</h4>
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>

                        </div>
                        <div class="text_text">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, esse?</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text_inner">
                            <img src="images/client-2.jpg" alt="">
                            <h4>Hassan</h4>
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </div>
                        <div class="text_text">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, commodi?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
<!-- Review part end -->

<!--  Counter part start -->
    <section id="counter" style="background: url(image/counter-background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="countter_text">
                        <h3 class="counter_part">19999</h3>
                        <p>Total Users</p>
                    </div>
                </div>
                <div class="col">
                    <div class="countter_text">
                        <h3 class="counter_part">569</h3>
                        <p>Take Exam</p>
                    </div>
                </div>
                <div class="col">
                    <div class="countter_text">
                        <h3 class="counter_part">261</h3>
                        <p>Category</p>
                    </div>
                </div>
                <div class="col">
                    <div class="countter_text">
                        <h3 class="counter_part">1500</h3>
                        <p>Blogs</p>
                    </div>
                </div>
                <div class="col">
                    <div class="countter_text">
                        <h3 class="counter_part">146</h3>
                        <p>Sponsers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  Counter part end -->
<!--  Sponser part start -->
    <section id="sponser_part">
        <div class="container">
            <div class="row sponser_slider">
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t1.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t4.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t2.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t3.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t4.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="sponser_img">
                        <img src="images/t5.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--  Sponser part end -->


  <?php
      include('partial-front/footer.php');
  ?>