<!DOCTYPE html>
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
		<?php echo("<h3>From PHP too :)</h3>"); ?>
		<h3>{{ angular_hello }}</h3>
		</br>
		
		<?php
			include_once( "class.php" );
			
			$test_c = new test_class();
			
			$arr = $test_c->initJSON();
			
			var_dump( $TYPES["_INT_"] ); echo("</br>");
			
			var_dump( $arr ); echo("</br>");
			
			$test_c->setInt(1);
			
			$arr = $test_c->initJSON();
			
			var_dump( $arr ); echo("</br>");
			
			$out = array_values( $arr );
			echo( "<pre>" . json_encode($out). "</pre>" );
			
			//var_dump( $test_c );
		
		?>
		
		
    </body>
</html>
