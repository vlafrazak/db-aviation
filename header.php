<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
strict.dtd">

<html>
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
	<!--#include virtual="/style/csbanner.ssi"-->
	<h1 id = "top">     ΑΕΡΟΔΡΟΜΙΟ   ΕΛΕΥΘΕΡΙΟΣ   ΒΕΝΙΖΕΛΟΣ
		</h1>
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
		<a href="/~db/db-aviation">Αρχική Σελίδα</a></li>
        <li class="mainMenu" ><a href="/~db/db-aviation/views/listEmployees/">Εργαζόμενοι</a>
            <ul>
                <li><a href="/~db/db-aviation/views/listTechnicians/">Τεχνικοί</a></li>
            </ul>
        </li>
		<li class="mainMenu" ><a href="/~db/db-aviation/views/listAircraftFleet/">Βάση Αεροσκαφών</a></li>
		<!--<li><a href="/~db/db-aviation/views/listAircraftModels/">Μοντέλα Αεροσκαφών</a></li>
		<li><a href="/~db/db-aviation/views/listChecks/">Έλεγχοι</a></li>-->
		</ul>
		
	</div>
