<?php include 'database.php'; ?>

<?php
include ('partial/menu.php')
?>
<?php
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
<div class="menu_content">
        <div class="wrapper">
               <h1>ManageQuestion</h1>
               <br>
               <br>
                <!-- button to add admin -->
                <a href="add-quiz.php" class="btn-primary">Add quiz</a>
                <br>
                <br>
                <br>
                <br>
                <br>
				<table class="tbl-full">
                    <tr>
                        <th>Question Number</th>
                        <th>Questions</th>
                        
                    
                      
                    </tr>
                    <?php

                    $sql = "SELECT * FROM questions";
                    $res= mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                    $sn=1;
                    if( $count>0){

                        while($row=mysqli_fetch_assoc($res)){
                         
                                $id = $row['question_number'];
                                $title=$row['question'];
                               
                                
                                ?>

                                <tr>
                        
                                <td><?php echo $sn++  ?> </td>
                                <td><?php echo $title ?></td>
                              
                            
                        </tr>
                        
                        <?php
                        }

                    }else{
                            echo"<tr><td colspan = '2' class='error'> Blog Not Added Yet.  </td></tr>";
                    }


?>
</table>
<//?php session_start(); ?>
<?php 

      //Check to see if score is set_error_handler
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	}
    
//Check if form was submitted
if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next=$number+1;
	$total=4;

	//Get total number of questions
	$query="SELECT * FROM `questions`";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	//Get correct choice
	$q = "select * from `choices` where question_number = $number and is_correct=1";
	$result = $mysqli->query($q) or die($mysqli->error.__LINE__);
	$row = $result->fetch_assoc();
	$correct_choice=$row['id'];



	//compare answer with result
	if($correct_choice == $selected_choice){
		$_SESSION['score']++;
	}

	if($number == $total){
		header("Location: final.php");
		exit();
	} else {
	        header("Location: question.php?n=".$next."&score=".$_SESSION['score']);
	}
}
?>



            </div>
            </div>
  <!-- content end -->
  <?php include('partial/footer.php')
      ?>