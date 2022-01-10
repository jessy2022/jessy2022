<?php

$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['age'];
$d=$_POST['phone'];
$e=$_POST['appointment'];


$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$new_info=mysql_query("INSERT INTO patients(name,gender,age,phone,appointment) VALUES('$a','$b','$c','$d','$e')");

mysql_query("UPDATE patients SET patients=patients");

if($new_info) {
    echo'
    Patient record has been successfully added';
}else{
    echo'Patient record not added';
}

?>
<br /><br />

<a href="viewpatients.php">Continue</a>