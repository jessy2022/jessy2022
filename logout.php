<?php
session_start();
if(isset($_SESSION['sesname']) && isset($_SESSION['sespass'])){
    unset($_SESSION['sesname']);
    unset($_SESSION['sespass']);
    session_destroy();
    
    header('location: index.html');
    } else {
        header('location: index.html');
    }

?>