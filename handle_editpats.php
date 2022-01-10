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
	

	<title>PATIENTS</title>
    
    
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
  height: 716px;
  background: rgba(0,0,0,.8);
  color: white;
  float: left;   
} 

#data{
  height: 760px; 
  background: url(images/pills.jpg);
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
    background: #E0EEEE;
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
  left: 350px;
  font-family: century gothic;  
}

h4 {
    padding: 5px;
}

h1{
  position: absolute;
  top: 50px;
  left: 480px;
  font-family: serif;
  color: #fff;  
}

button  {
    position: absolute;
    top: 45px;
    left: 1440px;
    margin: 3px;
    padding: 10px 15px;
    background: #E0EEEE;
    color: #000;
    border-radius: 6%;
	border: none;
    text-decoration: none;
	font-family: century gothic;
}

button:hover{
    cursor: pointer;
    background: #424242;
	color: white;
}

.box {
	position: absolute;
	top: 50%;
	left: 40%;
	transform: translate(-50%,-50%);
	width: 450px;
	padding: 35px;
	background: #FF8C00;
	box-sizing: border-box;
	box-shadow: 0 8px 15px rgba(0,0,0,.5);
	border-radius: 10px;
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
	top: 50%;
	left: 70%;
	transform: translate(-50%,-50%);
	width: 450px;
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
    top: 845px;
    width: 100%;
    height: 4.5vh;
    background: rgba(0,0,0,.8);
    text-align: center;
    color: white;
}

img{
    position: absolute;
    top: 15px;
    left: 50px;
}
table {
    position: absolute;
    top: 200px;
    left: 350px;
}

table.tbdisplay tr:first-child {
    background: #FF8C00;
    color: #000;
}

table tr{
    height: 4vh;
}

a.edit {
  background: black;  
}

a.delete {
  background: black;  
}
a {
    text-decoration: none;
    padding: 5px 10px;
    margin-left: 10px;
    color: white;
    border-radius: 5%;
}
</style>
    
</head>

<body>

<div id="header">

<h1>HEALTH CENTERS MANAGEMENT SYSTEM</h1>

<a href="index.html"><button type="submit">Logout</button></a>

</div>

<div id="sidebar">
<p>PATIENTS</p>

<ul>
<a href="home.php"><li>Admin Panel</li></a>
<a href="medical_staff.php"><li>Medical Panel</li></a>
<a href="specializations.php"><li>Medical Specializations</li></a>
<a href="addmedicalstaff.php"><li>Add Medical Staff</li></a>
<a href="searchmedicalstaff.php"><li>Search for Staff Members</li></a>

</ul>
</div>

<div id="data"><br />


<?php
$record=$_POST['record'];

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$appointment=$_POST['appointment'];



$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$edit=mysql_query("UPDATE patients SET name='$name',gender='$gender',age='$age',phone='$phone',appointment='$appointment' 
WHERE id='$record'");

mysql_query("UPDATE patients SET patients=patients");

if($edit) {
    header('location: viewpatients.php');
} else {
    echo'Error editing record';
}

?>



</div>



<div id="footer">

<h4>&copy; hcms 2018 - all rights reserved</h4>

</div>  



</body>
</html>