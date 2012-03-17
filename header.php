<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">

<html>
	<div id = "container">
		<head>
			<title>AIRPORT EL.VENIZELOS</title>
			<meta
                		http-equiv="Content-Type"
                		content = "text/html; charset=utf-8;"
        		/>
			<link
        			rel = "stylesheet"
        			type = "text/css"
				href = "/~db/db-aviation/css/style.css" />
			<link rel = "shotcut icon" href= "/~db/db-aviation/images/maurouli.jpg"/>
		</head>
    	<body>
		<h1 id = "top">     AIRPORT   ELEFTHERIOS   VENIZELOS</h1>
		<?php
    			$myset = include "settings-local.php";
		?>

		<div id="menu">
			<ul>
			<li class="mainMenu"><img 
			            src = "/~db/db-aviation/images/maurouli.jpg"
                		alt= "The db is not a lie..." 
                		width="50" 
                		hight="50" /> 
			<a href="/~db/db-aviation">HOME</a></li>
        		<li class="mainMenu" ><a href="/~db/db-aviation/views/listEmployees/">EMPLOYEES</a>
        		<li><a href="/~db/db-aviation/views/listTechnicians/">TECHNICIANS</a></li>
      		  	<li><a href="/~db/db-aviation/views/listAirTrafficControllers/">AIR TRAFFIC CONTROLLERS</a></li>
        		</li>
			<li class="mainMenu" ><a href="/~db/db-aviation/views/listAircraftFleet/">AIRCRAFT FLEET</a></li>
			<li><a href="/~db/db-aviation/views/listAircraftModels/">AIRCRAFT MODELS</a></li>
			<li><a href="/~db/db-aviation/views/listChecks/">CHECKS</a></li>
			<li><a href="/~db/db-aviation/views/listFAATests/">FAA CHECK TYPES</a></li>
		    </ul>
		</div>
  	</body>

