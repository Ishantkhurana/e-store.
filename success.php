<?php
require 'session-common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
if(isset($_GET['id']) && is_numeric($_GET['id'])){
$user_id = $_SESSION['user_id'];
$item_id= $_GET['id'];
$query = "UPDATE user_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_id . ") and status='Confirmed'";
$result= mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
    <head>
          <link rel=stylesheet type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type=text/javascript src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script type=text/javascript src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Order Successful</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mynavbar">
                           <ul class="nav navbar-nav navbar-right nav1">
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>  
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>                           
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
        </div><br><br><br><br><br>
        <div class="container">
        <div class="jumbotron">
            <p class="center">Thank you for ordering from the E- Store.The order will be delievered to you shortly.</p>
            <p class="center">Order some more electronic items <a href="home.php">here</a></p>
            </div>
        </div><br><br>
        <div class="visible-lg visible-md">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
         <footer>
                <div class="container-fluid">
                    <div class="row">
                <div class="foot">
                    <div class="visible-sm visible-xs">
                         <div class="row">
                        <div class="col-xs-4">  <h3> Information</h3></div>
                        <div class="col-xs-4">    <h3> My Account</h3> </div>                        
                        <div class="col-xs-4">  <h3> Contact Us</h3></div>  
                    </div>
                <div class="row">
                    <div class="col-xs-4">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-xs-4">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-xs-4">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='settings.php'>Settings</h4></a></div>  
                    </div>
                    </div>
                    <div class="visible-md visible-lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  <h3> Information</h3></div>
                        <div class="col-md-4 col-sm-6">    <h3> My Account</h3> </div>                        
                        <div class="col-md-4 col-sm-6">  <h3> Contact Us</h3></div>                
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='settings.php'>Settings</h4></a></div>     
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </footer>
    </body>
 