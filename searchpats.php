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
	

	<title>SEARCH FOR PATIENTS</title>
    
    
<style>

* {
    margin: 0;
    padding: 0;
}

body{
    margin: 0px;
    padding: 0px;
    background-image: url(images/pills.jpg);
    background-size: cover;
    font-family: serif;
}

#header{
  width: 100%;
  height: 124px;
  background: #424242; 
  color: white; 
  list-style-type: none;
}

h1{
  position: absolute;
  top: 50px;
  left: 480px;
  font-family: serif;
  color: #fff;  
}

h2 {
    margin: 0 0 10px;
    padding: 0;
    font-size: 24px;
}

h3 {
    position: absolute;
    top: 200px;
    left: 640px;
    font-family: serif;
    font-size: 24px;
}

h4 {
    padding: 10px;
}

.box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 500px;
    transform: translate(-50%,-50%);
}

input {
    position: relative;
    display: inline-block;
    font-size: 15px;
    box-sizing: border-box;
    transition: .5s;
}

input[type="text"] {
    background: #fff;
    width: 340px;
    height: 50px;
    border: none;
    outline: none;
    padding: 0 25px;
    border-radius: 25px 0 0 25px;
}

input[type="submit"] {
    position: relative;
    left: -5px;
    border-radius: 0 25px 25px 0;
    width: 150px;
    height: 50px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #ffc107;
}

input[type="submit"]:hover {
    background: #ff5722;
    color: #fff;
}

button  {
    position: absolute;
    top: 45px;
    left: 1380px;
    margin: 3px;
    padding: 10px 15px;
    background: #fff;
    color: #000;
    border-radius: 6%;
	border: none;
    text-decoration: none;
	font-family: century gothic;
}

a {
    position: absolute;
    top: 500px;
    left: 550px;
    font-size: 20px;
    color: #000;
}

button:hover{
    cursor: pointer;
    background: #000;
	color: white;
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

<h3>Search for a patient</h3>
<div class="box">
    <h2>Search</h2>
    <form action="handlesearchpats.php" method="POST">
        <input type="text" name="srch" placeholder="Type..."/>
        <input type="submit" name="" value="Search"/>
    </form>
    
</div>

<a href="viewpatients.php">View patients list</a>

<div id="footer">

<h4>&copy; hcms 2018 - all rights reserved</h4>

</div>  



</body>
</html>