<?php
include('../config/constant.php');
include('login-check.php');

?>

<html>
    <head>
     <title>AlgoLearner WEBSITE</title>
     <link rel="stylesheet" href="../css/admin.css">
     
    </head>
    <body>
        <!-- menu start -->
        <div class="menu text-center">
            <div class="wrapper">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../images/logo1.png" alt="Logo" class="img-responsive">
                </a>
            </div>
                <ul>
                    <li><a href="index.php">home</a><li>
                    <li><a href="manageadmin.php">Admin</a><li>
                    <li><a href="manageuser.php">User</a><li>
                    <li><a href="managecataegory.php">Category</a><li>
                    <li><a href="manageblog.php">Blogs</a><li>
                    <li><a href="managequestion.php">Question</a><li>
                    <li><a href="logout.php">Logout</a><li>
                </ul>

            </div>
        </div>
        <!-- menu end -->