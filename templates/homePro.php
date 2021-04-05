<?php
include('login.php'); // Includes Login Script
 
if(isset($_SESSION['login_user'])){
header("location: loginaction.php"); //page to load after login
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
  
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='styles/style.css') }}">      
        <!-- Loading third party fonts -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='styles/home.css') }}">

 

        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">
        
    </head>

 


    <body>
        
        <div class="site-content">
            <div class="site-header">
                <div class="container">
                    <a href="index.html" class="branding">
                        <img src="images/logo.png" alt="" class="logo">
                        <div class="logo-type">
                            <h1 class="site-title">Weather Forecast</h1>
                            <small class="site-description">Your Interior Weatherman</small>
                        </div>
                    </a>

 

                    <!-- Default snippet for navigation -->
                    <div class="main-navigation">
                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                            <li class="menu-item"><a href="news.html">News</a></li>
                            <li class="menu-item"><a href="login.html">Login</a></li>
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                        </ul> <!-- .menu -->
                    </div> <!-- .main-navigation -->

 

                    <div class="mobile-navigation"></div>

 

                </div>
            </div> <!-- .site-header -->

 

            <h2 class="weatherText">Hey Pro User</h2>  
            <form class="weatherText" id="weatherForm" action="{{ url_for('render_results') }}" method="post">     
                Enter City Name <input class="weatherText" id="weatherInput" type="text" name="city"><br>     
                <input class="weatherText" id="weatherSubmit" type="submit" value="Submit"> 
            </form>
            <br><br>
            <h2 class="weatherText">Hey Pro User</h2> 
            <form class="weatherText" id="weatherForm" action="{{ url_for('render_results') }}" method="post">     
                Enter lattitude <input class="weatherText" id="lattitude" type="text" name="lattitude"><br>     
                Enter longitude <input class="weatherText" id="longitude" type="text" name="longitude"><br>     
                <input class="weatherText" id="weatherSubmit" type="submit" value="Submit"> 
            </form>
        
            <div class="col-md-3 col-md-offset-1">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>

 

                </div>
            </footer> <!-- .site-footer -->
        </div>
        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        
    </body> 

 

</html> 
