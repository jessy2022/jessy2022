<?php

$a=$_POST['first_name'];
$b=$_POST['second_name'];
$c=$_POST['specialization'];
$d=$_POST['email'];
$e=$_POST['phone'];
$f=$_POST['gender'];
$g=$_POST['date_appointed'];


$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$new_info=mysql_query("INSERT INTO medical_staff(first_name,second_name,specialization,email,phone,gender,date_appointed) VALUES('$a','$b','$c','$d','$e','$f','$g')");

mysql_query("UPDATE medical_staff SET medical_staff=medical_staff");

if($new_info) {
    echo'
    Staff member record has been successfully added';
}else{
    echo'Staff member record not added';
}

?>
<br /><br />

<a href="addmedicalstaff.php">Continue</a>