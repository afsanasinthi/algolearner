<?php
include('partial/menu.php')
?>
        <!-- content start -->
        <div class="menu_content">
        <div class="wrapper">
               <h1>Manageblog<h1>
               <br>
               
               <?php 
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['upload'])){
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }
                    if(isset($_SESSION['delete'])){
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    if(isset($_SESSION['unauthorized'])){
                        echo $_SESSION['unauthorized'];
                        unset($_SESSION['unauthorized']);
                    }
                  
                  
                  

?>
<br>
               <!-- button to add admin -->
               <a href="<?php echo SITEURL; ?>admin/add-blog.php" class="btn-primary">Add blog</a>
              

               <br>
               <br>
               <br>


                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                       
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM tbl_blog";
                    $res= mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                    $sn=1;
                    if( $count>0){

                        while($row=mysqli_fetch_assoc($res)){
                         
                                $id = $row['id'];
                                $title=$row['title'];
                               
                                $image_name=$row['image_name'];
                                $featured=$row['featured'];
                                $active=$row['active'];
                                ?>

                                <tr>
                        
                                <td><?php echo $sn++  ?> </td>
                                <td><?php echo $title ?></td>
                                
                                <td><?php 
                                        //echo $image_name;
                                        if($image_name!=""){

                                                ?>
                                                <img src="<?php echo SITEURL;?>images/blog/<?php echo $image_name; ?>" width="100px" height="100px">
                                                 
                                                <?php

                                        }else{
                                                echo"<div class='error'>image not added</div>";
                                        }
                                        ?>
                                </td>
                                <td><?php echo $featured ?></td>
                                <td><?php echo $active ?></td>
                                <td>
                                <a href="<?php echo SITEURL;?>admin/update-blog.php?id=<?php echo $id;  ?>" class="btn-2nd">update Blog </a> 
                                <a href="<?php echo SITEURL;?>admin/delete-blog.php?id=<?php echo $id;  ?>&image_name=<?php echo $image_name;?>" class="btn-3rd">delete blog </a> 
                                </td>
                            
                        </tr>
                        
                        <?php
                        }

                    }else{
                            echo"<tr><td colspan = '2' class='error'> Blog Not Added Yet.  </td></tr>";
                    }


?>



                    
                  
                </table>
            </div>
            </div>
        <!-- content end -->
      <?php include('partial/footer.php')
      ?>
        
       
    </body>