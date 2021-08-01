 <?php include "database.php"; ?>
 
 <?php
  
  include('menu.php');

?>
<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz exam!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container mt-sm-5 my-1">
          <h1 style="background: darkorange; color:#f1f1f1; text-align:center; font-size:35px; padding:20px; font-weight:600; border-radius: 30px;">Welcome to Quiz exam!</h1>
	</div>
      </header>


      <main>
      <div style="font-family: Arial, Helvetica, sans-serif; font-size:20px; color:#333; text-align:center; margin:10px;"">
       
	<p>This is a multiple choice quiz to test your knowledge about computer science</p>
	<ul class="py-2 h5">
		<li style="text-align: center;" ><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li style="text-align: center;"><strong>Type: </strong>Multiple Choice</ul>
		<li style="text-align: center;"><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
	</ul>
	<a style="background: #33cccc; color: floralwhite; padding-top: 24px; margin-left: 535px; padding-right: 24px; padding-bottom: 24px; padding-right: 47px; padding-left: 51px; font-size: 22px; border-radius: 28px;" href="question.php?n=1" class="start"  >Start Quiz</a>
      </div>
    </div>
    </main>


    <?php
      include('footer.php');
  ?>
  </body>
</html>
