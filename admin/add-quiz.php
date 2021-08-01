<?php include "database.php"; ?>
<?php
include ('partial/menu.php')
?>
<br>
<br>
<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $question_number = $_POST['question_number'];      
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];
   $choices[5] = $_POST['choice5'];

   //Question query
   $query="insert into questions (question_number, question) 
   	 values('$question_number','$question_text')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       } else {
	         $is_correct = 0;
	       }
              $query="insert into choices (question_number,is_correct,choice) 
   	          values('$question_number','$is_correct','$value')";
              $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	          if($insert_row){
	            continue;
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        }
    }
   $msg="Question has been added";
}
}
//get total questions
$query = "select * from questions";
$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total=$questions->num_rows;
$next=$total+1;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="wrapper">
          <h1 style="text-align: center;">Questions</h1>
		  <br>
		  <br>
	</div>
      </header>


      <main>
	<div class="wrapper">
	     <h2 style="text-align:center; color:crimson; margin-top:-20px;  padding-bottom:20px;">Add A question</h2>
	     <?php 
	     	   if(isset($msg)) {
	     	      echo "<p>".$msg."</p>";
	     }
	     ?>
	     <form method="post" action="add-quiz.php">
	     	   <p>
			<label style="text-align: center; font-weight: 700; border: 1px solid #ddd; padding:16px;">Question Number</label>
			<input  type="number" value="<?php echo $next; ?>" name="question_number" />
		   </p>
	     	   <p>
			<label style="text-align: center; background:#ff9933; margin-left:37%; font-size:20px;">Question</label>
			<input style="padding:70px; font-size:20px; font-weight:500; color:darkcyan;" type="text" name="question_text" />
		   </p>
	     	   <p>
			<label>Choice 1: </label>
			<input style="padding:30px; font-size:15px; font-weight:400; color:darkorange;" type="text" name="choice1" />
		   </p>
	     	   <p>
			<label>Choice 2: </label>
			<input style="padding:30px; font-size:15px; font-weight:400; color:darkorange;"  type="text" name="choice2" />
		   </p>
	     	   <p>
			<label>Choice 3: </label>
			<input style="padding:30px; font-size:15px; font-weight:400; color:darkorange;" type="text" name="choice3" />
		   </p>
	     	   <p>
			<label>Choice 4: </label>
			<input style="padding:30px; font-size:15px; font-weight:400; color:darkorange;" type="text" name="choice4" />
		   </p>
	     	   <p>
			<label>Choice 5: </label>
			<input style="padding:30px; font-size:15px; font-weight:400; color:darkorange;" type="text" name="choice5" />
		   </p>
	     	   <p>
			<label style="text-align: center; font-weight: 700; border: 1px solid #ddd; padding:10px; background:crimson">Correct choice number </label>
			<input  type="number" name="correct_choice" />
		   </p>
		   <p>
			<input style="background:#23997f; color:cornsilk;  padding:15px;" type="submit" name="submit" value="Submit" />
			
		   </p>
	     </form>
	</div>
	<?php
	if(isset($_POST['submit'])){
		header('location: managequestion.php');
	}
	?>
      </main>


    <footer>
      <!-- content end -->
  <?php include('partial/footer.php')
      ?>
    </footer>
  </body>
</html>