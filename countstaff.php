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
	

	<title>NUMBER OF MEDICAL STAFF</title>
    
    
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
  height: 120px;
  background: #424242; 
  color: white; 
  list-style-type: none;
}

h1{
  position: absolute;
  top: 45px;
  left: 375px;
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

button:hover{
    cursor: pointer;
    background: #000;
	color: white;
}

.box {
    position: absolute;
    top: 200px;
    left: 450px;
    width: 30%;
    height: 30px;
    background: #fff;
    font-size: 20px;
    color: #000;
    padding: 25px;
    border-radius: 10px;
}

a {
    position: absolute;
    top: 310px;
    left: 600px;
    font-size: 15px;
    color: #000;
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

<div class="box">
<?php
// Connect to the server
mysql_connect('localhost','root','') or die ('could not connect to the server.');
mysql_select_db('health') or die ('failed to connect to the database!');
$usercount=mysql_query("SELECT * FROM medical_staff") or die ('the query failed.'); 
$count=mysql_num_rows($usercount);
echo'There are currently '.$count.' staff members registered.';
?>
</div>

<a href="viewmedicalstaff.php">View staff list</a>


<div id="footer">

<h4>&copy; HCMS by jessy 2021- All Rights Reserved</h4>

</div>  



</body>
</html>