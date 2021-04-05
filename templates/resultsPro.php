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
        
        <!-- Loading third party fonts -->
<link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='styles/style.css') }}">  
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
            
            <div id="weatherResults">     
                <h3>Weather in {{ location }}</h3>     
                <h2>{{ temp }}° F</h2>     
                <h3>{{ weather }}</h3>     
                <h4>Feels like: {{ feels_like }}° F</h4> 
            </div>
            
            <br>
                        
            <div id="weatherResultsPro">     
                <h3> Air Pollution at Latitude : {{ lat }} and Longitude : {{lon}}</h3>     
                <h2> Values : </h2>     
                <h2> NO :{{var_no}}% and NO2 : {{var_no2}}% </h2> 
                <br><h2> CO :{{var_co}}% and O3 : {{var_o3}}% </h2> 
                <br><h2> SO2 :{{var_so2}}% and PM2_5 : {{var_pm2_5}}% </h2> 
                <br><h2> PM10 :{{var_pm10}}% and NH3 : {{var_nh3}}% </h2> 
            </div>
        
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
