<?php
session_start();

if(isset($_SESSION['sesname']) && isset($_SESSION['sespass'])){
    } 
else {
    header('location: logout.php');
}
?>

<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>PATIENTS PANEL</title>
    
    
<style>

* {
    margin: 0;
    padding: 0;
}

body{
    margin: 0px;
    padding: 0px;
}

#header{
  width: 100%;
  height: 126px;
  background: #424242; 
  color: white; 
  list-style-type: none;
}

#sidebar{
  width: 300px;
  height: 724px;
  background: rgba(0,0,0,.8);
  color: white;
  float: left;   
} 

#data{
  height: 760px; 
  background-image: url(images/pills.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}  

#adminLogo{
  background: white;
  border-radius: 55px;
  padding: 15px;
}

p{
    margin-left: 10px;
    font-family: sans-serif;
    font-size: 15px;
    color: khaki;
    padding: 10px;
}

ul li{
    padding: 20px;
    margin-left: 3px;
    border-bottom: 2px solid white;
    color: white;
    text-decoration: none;

    font-family: century gothic;
}

ul li:hover{
    background: #fff;
    color: black;
    display: block;
}

a{
   text-decoration: none;
   color: white; 
}

h2{
  position: absolute;
  top: 150px;
  left: 370px;
  font-family: century gothic;  
}

h4 {
    padding: 5px;
}

h1{
  position: absolute;
  top: 50px;
  left: 375px;
  font-family: serif;
  color: #fff;  
}

button  {
    position: absolute;
    top: 45px;
    left: 1165px;
    margin: 3px;
    padding: 10px 15px;
    background: #FF8C00;
    color: #000;
    border-radius: 6%;
	border: none;
    text-decoration: none;
	font-family: century gothic;
}

button:hover{
    cursor: pointer;
    background: #fff;
	color: #000;
}

.box {
	position: absolute;
	top: 50%;
	left: 40%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 35px;
	background: #FF8C00;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}
.box h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #000;
}

.box input:hover[type="submit"]
{
	background: #228B22;
    color: white;
}

.box input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	background: rgba(0,0,0,.8);
    color: #fff;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

#box {
	position: absolute;
	top: 50%;
	left: 78%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 35px;
	background: #228B22;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
}

#box h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #fff;
}

#box input:hover[type="submit"]
{
	background: #FF8C00;
    color: #000;
}

#box input[type="submit"]
{
	background: transparent;
	border: none;
	outline: none;
	background: rgba(0,0,0,.8);
    color: #fff;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

div#footer {
    position: absolute;
    top: 849px;
    width: 100%;
    height: 4.5vh;
     background: #424242; 
    text-align: center;
    color: white;
}


</style>
    
</head>

<body>

<div id="header">

<h1>HEALTH CENTERS MANAGEMENT SYSTEM</h1>

<a href="index.html"><button type="submit">Logout</button></a>

</div>

<div id="sidebar">
<p>QUICK LINKS</p>

<ul>
<a href="home.php"><li>Admin Panel</li></a>
<a href="addpatients.php"><li>Add Patients</li></a>
<a href="searchpatients.php"><li>Search for Patients</li></a>
<a href="countpat.php"><li>Number of Patients</li></a>

</ul>
</div>

<div id="data"><br />

<h2>PATIENTS| PANEL</h2> 

<div class="box">
		<h3>PATIENTS</h3><br />
		<a href="viewpatients.php"><input type="submit" name="" value="View"></a>
</div>

<div id="box">
		<h3>APPOINTMENTS</h3><br />
		<a href="appointments.php"><input type="submit" name="" value="View Details"></a>
</div>

</div>



<div id="footer">

<h4>&copy; HCMS 2019 - All Rights Reserved</h4>

</div>  



</body>
</html>