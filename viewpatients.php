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
	

	<title>VIEW PATIENT DETAILS</title>
    
    
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
  left: 400px;
  font-family: serif;
  color: #fff;  
}

button  {
    position: absolute;
    top: 45px;
    left: 1095px;
    margin: 3px;
    padding: 10px 15px;
    background:  #FF8C00;
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
    top: 849px;
    width: 100%;
    height: 4.5vh;
    background: #424242; 
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
<p>QUICK LINKS</p>

<ul>
<a href="home.php"><li>Admin Panel</li></a>
<a href="medical_staff.php"><li>Medical Staff Panel</li></a>
<a href="patientspanel.php"><li>Patients Panel</li></a>
<a href="addpatients.php"><li>Add Patients</li></a>
<a href="searchpats.php"><li>Search for Patients</li></a>
<a href="countpatients.php"><li>Number of Patients</li></a>
</ul>
</div>

<div id="data"><br />

<h2>PATIENT DETAILS</h2> 

<?php
$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$retrieve=mysql_query("SELECT * FROM patients ORDER BY name ASC");

if(mysql_num_rows($retrieve)>=1) {
    echo'
    <table border= "1" width="70%" cellpadding="10" class=tbdisplay>
    <tr>
    <th>id</th>
     <th>Name</th>
      <th>Gender</th>
       <th>Age</th>
        <th>Phone No</th>
         <th>Appointment Date</th>
          
          <th>Options</th>
          </tr>';
          
    $i=1;
    
    while($row=mysql_fetch_array($retrieve)) {
        
        if($i%2==0) {
            $bgcolor="white";
        } else {
            $bgcolor="#E0EEEE";
        }
        
        $id=$row['id'];
        $name=$row['name'];
        $gender=$row['gender'];
        $age=$row['age'];
        $phone=$row['phone'];
        $appointment=$row['appointment'];
        
        
    echo'
    <tr style="background: '.$bgcolor.'">
    <td style="text-align:center;">'.$id.'</td>
    <td style="text-align:left;">'.$name.'</td>
    <td style="text-align:left;">'.$gender.'</td>
    <td style="text-align:center;">'.$age.'</td>
    <td style="text-align:center;">'.$phone.'</td>
    <td style="text-align:center;">'.$appointment.'</td>
    
    <td style="text-align:center;">
    <a href="editpats.php? record='.$id.'" class="edit">Edit</a>
    <a href="deletepats.php? record='.$id.'" class="delete">Delete</a>
    </td>
    </tr>';
$i++;}
echo'
</table>';
} else {
    echo'No records in your table';
}
?>


</div>



<div id="footer">

<h4>&copy; hcms 2018 - all rights reserved</h4>

</div>  



</body>
</html>