<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
  
  include('menu.php');

?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Enjoy your exam !</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
	
  </head>
  <body>
    <div id="container" style="background-color:darkslategray; border-radius: 30px;">
      <header>
        <div class="container">
          <h1 style="text-align: center; font-weight: 800;  padding:16px; font-family: 'Oswald', sans-serif; color:#f8ac09; font-size:60px;">Enjoy your exam !</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <div style="background: darkorange; color:#f1f1f1; text-align:center; font-size:35px; padding:20px; font-weight:600; border-radius: 30px;">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p style="color: #ffcc00; text-align: center; font-weight: 600; font-size:20px; padding:20px; font-family: Arial, Helvetica, sans-serif;">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
	      <ul style="font-family: Arial, Helvetica, sans-serif; font-size:20px; color:floralwhite; text-align:center; margin:10px;">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li style="padding: 10px;"><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input style="background: #33cccc; color: floralwhite; padding-top: 24px; margin-left: 535px; padding-right: 24px; padding-bottom: 24px; padding-right: 47px; padding-left: 51px; font-size: 22px; border-radius: 28px;" type="submit" value="Next" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
	
    </main>


    <footer>
	<?php
      include('footer.php');
  ?>
    </footer>
  </body>
</html>