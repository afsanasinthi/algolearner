 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
  
  include('menu.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>result</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div >
      <header>
        <div class="container">
          <h1 style="text-align: center; font-weight: 800;  padding:16px; font-family: 'Oswald', sans-serif; color:#0099ff; font-size:60px;">Exam Complete</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <h2 style="text-align: center; font-weight: 600; font-family: 'Oswald', sans-serif; color:#ff6600; font-size:40px;">You are Done!</h2>
	     <p style="text-align: center; font-weight: 800;  padding:6px; font-family: 'Oswald', sans-serif; color:#ff9900; font-size:70px;">Congrats! <br><br>You have completed the test</p>
	     <p style="text-align: center; font-weight: 500;  padding:20px; font-family: 'Oswald', sans-serif; color:#008060; font-size:60px;">Final socre: <?php echo $_SESSION['score']; ?></p>
	     <a href="question.php?n=1" style="background: #e23e38; color: floralwhite; padding-top: 24px; margin-left: 100px; padding-right: 24px; padding-bottom: 24px; padding-right: 47px; padding-left: 51px; font-size: 22px; border-radius: 28px;">Retake Quiz</a>
	     <a href="../home.php" style="background: #336699; color: floralwhite; padding-top: 24px; margin-left: 250px; padding-right: 24px; padding-bottom: 24px; padding-right: 47px; padding-left: 51px; font-size: 22px; border-radius: 28px;">Back to Home </a>
	     <?php session_destroy(); ?>
	</div>
      </main>
      <?php
      include('footer.php');
  ?>

   
  </body>
</html>