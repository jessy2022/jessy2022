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
	

	<title>EDIT STAFF RECORDS</title>
    
    
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
  left: 500px;
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
    left: 40%;
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
<p>MEDICAL OFFICERS</p>

<ul>
<a href="home.php"><li>Admin Panel</li></a>
<a href="medical_staff.php"><li>Medical Staff Panel</li></a>
<a href="specializations.php"><li>Medical Specializations</li></a>
<a href="addmedicalstaff.php"><li>Add Medical Staff</li></a>
<a href="viewmedicalstaff.php"><li>View Staff List</li></a>
<a href="searchmedicalstaff.php"><li>Search for Staff Members</li></a>
<a href="logout.php"><li>Logout</li></a>

</ul>
</div>

<div id="data"><br />



<?php

$editrecord=$_GET['record'];

$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$check=mysql_query("SELECT * FROM medical_staff WHERE id='$editrecord'");

if(mysql_num_rows($check)==1) {
    $row=mysql_fetch_array($check);
    
    $first_name=$row['first_name'];
    $second_name=$row['second_name'];
    $specialization=$row['specialization'];
    $email=$row['email'];
    $phone=$row['phone'];
    $gender=$row['gender'];
    $date_appointed=$row['date_appointed'];
    
   mysql_query("UPDATE medical_staff SET medical_staff=medical_staff");
    
echo'


<form action="handle_editstaff.php" method="POST">

<h3>EDIT STAFF RECORDS</h3><br />

First Name:<br />
<input type="text" name="first_name" value="'.$first_name.'"/><br />

Second Name:<br />
<input type="text" name="second_name" value="'.$second_name.'"/><br />

Specialization:<br />
<input type="text" name="specialization" value="'.$specialization.'"/><br />


Email:<br />
<input type="text" name="email" value="'.$email.'"/><br />

Phone:<br />
<input type="text" name="phone" value="'.$phone.'"/><br />

Gender:<br />
<input type="text" name="gender" value="'.$gender.'"/><br />

Date Appointed:<br />
<input type="text" name="date_appointed" value="'.$date_appointed.'"/><br />

<input type="hidden" name="record" value="'.$editrecord.'"/>

<button type="submit">SAVE</button>
</form>';

} else {
    echo'
    Requested record not found';
}

?>



</div>



<div id="footer">

<h4>&copy;  HCMS by jessy 202 - All Rights Reserved</h4>

</div>  



</body>
</html>