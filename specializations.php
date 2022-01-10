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
	

	<title>MEDICAL SPECIALIZATIONS</title>
    
    
<style>
*{
    margin: 0;
    padding: 0;
}

body{
    
}

#header{
  width: 100%;
  height: 126px;
  background: #424242; 
  color: white; 
  list-style-type: none;
}

#menu{
  width: 100%;
  height: 75px;
  background: #E0EEEE;
  color: white;
  float: left;   
}

#main{
  height: 700px; 
  background: #fff; 
}  

ul li{
    padding: 20px;
    margin-left: 3px;
    color: black;
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
  top: 117px;
  left: 350px;
  font-family: century gothic;  
}

h1{
  position: absolute;
  top: 50px;
  left: 380px;
  font-family: serif;
  color: #fff;  
}

h4{
    font-family: serif;
    padding: 6px;
    text-align: center;
}

button  {
    position: absolute;
    top: 45px;
    left: 1200px;
    margin: 3px;
    padding: 10px 15px;
    background:  #FF8C00;
    color: rgba(0,0,0,.8);
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

div#footer {
    position: absolute;
    top: 849px;
    width: 100%;
    height: 4.5vh;
     background: #424242; 
    color: white;
}
a.edit {
  background: #000;
  text-decoration: none;
  padding: 0px 10px;
  margin-left: 10px; 
  border-radius: 5%; 
}

a.delete {
  background: #000;
  text-decoration: none; 
  padding: 0px 10px;
  margin-left: 10px; 
  border-radius: 5%;  
}

div#menu a {
    font-family: century gothic;
    text-decoration: none;
    padding: 8px 30px;
    border-radius: 6%;
	border: none;
    color: black;
    line-height: 70px;
    padding-left: 235px;
}

div#menu a:hover,div#menu a.active {
    font-family: century gothic;
    background: #E0EEEE;
    color: black;
}

table.tbdisplay tr:first-child {
    background: #228B22;
    color: white;
}

table tr{
    height: 3vh;
}

</style>
    
</head>

<body>

<div id="header">

<h1>HEALTH CENTERS MANAGEMENT SYSTEM</h1>

<a href="index.html"><button type="submit">Logout</button></a>

</div>


<div id="menu">
<a href="home.php">Home</a>
<a href="viewmedicalstaff.php">View staff Details</a>
<a href="viewpatients.php">View Patient Details</a>
<a href="searchmedicalstaff.php">Search</a>


</div>



<div id="main"><br />

<?php
$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$retrieve=mysql_query("SELECT * FROM medical_specialization ORDER BY specialization");

if(mysql_num_rows($retrieve)>=1) {
    echo'
    <table border= "1" width="100%" cellpadding="5" cellspacing="0" class=tbdisplay>
    <tr>
    <th>id</th>
     <th>Specialization</th>
      <th>Details</th>
       
       <th>Action</th>
          </tr>';
          
    $i=1;
    
    while($row=mysql_fetch_array($retrieve)) {
        
        if($i%2==0) {
            $bgcolor="white";
        } else {
            $bgcolor="white";
        }
        
        $id=$row['id'];
        $specialization=$row['specialization'];
        $details=$row['details'];
        
    echo'
    <tr style="background: '.$bgcolor.'">
    <td style="text-align:center;">'.$id.'</td>
    <td>'.$specialization.'</td>
    <td>'.$details.'</td>
    
    
    <td style="text-align:center;">
    <a href="edit.php? record='.$id.'" class="edit">Edit</a>
    <a href="delete.php? record='.$id.'" class="delete">Delete</a>
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

<h4>&copy;  HCMS by jessy 2021- All Rights Reserved</h4>
</div>  



</body>
</html>