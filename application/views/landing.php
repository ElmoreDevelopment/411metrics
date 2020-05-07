<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="only screen and (min-width:801px)">
<!--    <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="style-small.css">-->
<!--    <link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="style-medium.css">-->
<!--    <link rel="stylesheet" href="js/slicknav.css">-->
    <!-- JS -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--    <script type="text/javascript" src="js/response.js"></script>-->
<!--    <script src="js/jquery.slicknav.min.js"></script>-->
</head>
<body cz-shortcut-listen="true">
<div id="main-wrapper">
    <header id="main-header" class="home-header">        	<nav id="main-nav-left">
            <a id="logo" href="#">
                <img src="img/411logo.png" alt="CallRail Call Tracking">
            </a>
            <ul class="main-nav-ul">
                <li class="main-nav-li">
                    <a href="#" title="How It Works" class="left-nav-link">How It Works</a>
                </li>
                <li class="main-nav-li">
                    <a href="#" title="Pricing" class="left-nav-link">Pricing</a>
                </li>
                <li class="main-nav-li">
                    <a href="#" title="Blog" class="left-nav-link">Blog</a>
                </li>
                <li class="main-nav-li">
                    <a href="/codeigniter/portal/dashboard" title="Log In" class="left-nav-link">Log In</a>
                </li>
            </ul>
        </nav></header>
    <div id="front-page" class="page-content">
        <div id="top-bg"></div>
        <div id="spotlight-wrap">
            <div id="spotlight-content" class="center-text">
                <h1>Are your marketing strategies creating a return on investment?</h1>
                <div class="clear"></div>
                <button class="ghost"><b>Start Tracking Your Marketing TODAY!</b></button>
            </div>
        </div>
    </div>
    <div id="sub-content-wrap">
        <div id="sub-content">
            <div id="sub-left" class="center-text">
                <h1>Beta Signup</h1>
                If you have been given a beta code, please create your account.<br>
                <a href="/Portal/setup/" class="register-button center-text"></a>
            </div>
            <div id="sub-mid" class="center-text">
                <h1>Beta Login</h1>
                Already registered for our BETA? Access your account.<br>
                <a href="/Portal/dashboard/" class="login-button center-text"></a>
            </div>
            <div id="sub-right" class="center-text">
                <h1>View Our Demo</h1>
                <p>Click the login button to the left and enter these credentials:</p>
                Username: demo@gmail.com<br>
                Password: password
            </div>
        </div>
    </div>
    <div id="main-footer-wrapper">
        <footer id="main-footer" class="min-width-container">
            <div id="main-footer-top" class="center-text">
                <img src="img/411logo.png"><br>
                © Copyright 2014 - All Rights Reserved - Developed and Maintained by Sharktek Consulting LLC
            </div>
        </footer>
    </div>
</div>


</body>
</html>