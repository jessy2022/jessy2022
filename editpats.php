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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<title>EDIT PATIENT RECORDS</title>
    
    
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
  height: 722px;
  background: rgba(0,0,0,.8);
  color: white;
  float: left;   
} 

#data{
  height: 760px; 
  background-color: #fff;
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;
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
  top: 140px;
  left: 670px;
  font-family: century gothic;  
}

h4 {
    padding: 5px;
}

h1{
  position: absolute;
  top: 50px;
  left: 400px;
  font-family: serif;
  color: #fff;  
}

.box {
	position: absolute;
	top: 50%;
	left: 35%;
	transform: translate(-50%,-50%);
	width: 415px;
	padding: 35px;
	background: #FF8C00;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
    text-align: center;
    padding: 0;
}
.box h3 {
	margin: 0 0 5px;
	padding: 0;
	color: #fff;
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
	top: 40%;
	left: 70%;
	transform: translate(-50%,-50%);
	width: 415px;
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
    top: 848px;
    width: 100%;
    height: 4.5vh;
    background: #424242; 
    text-align: center;
    color: white;
}

form{
    position: absolute;
    left: 35%;
    width: 400px;
    height: 630px;
    overflow: hidden;
    margin: 35px 35% 0px 40%;
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: 0;
}

input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-left: 10px;
}
input[type=date], select {
   width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-left: 10px;
}
form a {
   
    padding: 10px 20px;
    color: white;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
}

form a:hover {
    cursor: pointer;
    background: #000;
}
button {
    width: 80%;
    border: none;
    padding: 10px 20px;
    color: white;
    background: #228B22;
    border-radius: 5px;
    box-shadow: 0 8px 15px rgba(0,0,0,.3);
    margin-left: 10px;
}

button:hover {
    cursor: pointer;
    background: #FF8C00;
}

</style>
    
</head>

<body>

<div id="header">

<h1>HEALTH CENTERS MANAGEMENT SYSTEM</h1>

</div>

<div id="sidebar">
<p>QUICK LINKS</p>

<ul>
<a href="home.php"><li>Admin Panel</li></a>
<a href="patientspanel.php"><li>Patients Panel</li></a>
<a href="addpatients.php"><li>Add Patients</li></a>
<a href="searchpatients.php"><li>Search for Patients</li></a>
<a href="countpatients.php"><li>Number of Patients</li></a>
<a href="logout.php"><li>Logout</li></a>

</ul>
</div>

<div id="data"><br />



<?php

$editrecord=$_GET['record'];

$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$check=mysql_query("SELECT * FROM patients WHERE id='$editrecord'");

if(mysql_num_rows($check)==1) {
    $row=mysql_fetch_array($check);
    
    $name=$row['name'];
    $gender=$row['gender'];
    $age=$row['age'];
    $phone=$row['phone'];
    $appointment=$row['appointment'];
    
   mysql_query("UPDATE patients SET patients=patients");
    
echo'


<form action="handle_editpats.php" method="POST">

<h3>EDIT PATIENTF RECORDS</h3><br />

Name:<br />
<input type="text" name="name" value="'.$name.'"/><br />

Gender:<br />
<input type="text" name="gender" value="'.$gender.'"/><br />

Age:<br />
<input type="text" name="age" value="'.$age.'"/><br />

Phone:<br />
<input type="text" name="phone" value="'.$phone.'"/><br />

Appointment Date:<br />
<input type="text" name="appointment" value="'.$appointment.'"/><br />

<input type="hidden" name="record" value="'.$editrecord.'"/>

<button type="submit">EDIT</button>
</form>';

} else {
    echo'
    Requested record not found';
}

?>



</div>



<div id="footer">

<h4>&copy; hcms 2018 - all rights reserved</h4>

</div>  



</body>
</html>