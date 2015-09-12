<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" ng-app="PHPCMV_App">
    <head>
        <meta charset="UTF-8">
        <title>PHP Class Mongo View</title>
		
		<meta name="viewport" content="initial-scale=1" />
		
		<link rel="stylesheet" href="bower_components/angular-material/angular-material.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Russo+One:400normal">
		<link rel="stylesheet" href="css/index.css">
		
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/angular/angular.min.js"></script>
		<script src="bower_components/angular-animate/angular-animate.min.js"></script>
		<script src="bower_components/angular-aria/angular-aria.min.js"></script>
		<script src="bower_components/angular-material/angular-material.min.js"></script>
		
		<script src="js/main.js"></script>
    </head>
    <body layout="column" ng-controller="MainCtrl">
		<h1>Hello World!</h1>
		<?php
			echo("<h1>From PHP too :)</h1>");
		?>
		<h1>{{ angular_hello }}</h1>
    </body>
</html>
