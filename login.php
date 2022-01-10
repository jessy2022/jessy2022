<?php

$a=$_POST['username'];
$b=$_POST['password'];

$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health',$server);
$check=mysql_query("SELECT * FROM auth WHERE username='$a' && password='$b'");

if(mysql_num_rows($check)==1) {
    
    session_start();
    $_SESSION['sesname']=$a;
    $_SESSION{'sespass'}=$b;
    
    
    header('location: home.php');
    }
    
    else {
        echo'
        Alert! Username or Password is invalid, please try again.
        ';
    }

?>
<br /><br /><br />

<a href="index.html">BACK TO LOGIN PAGE</a>