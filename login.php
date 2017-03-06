<?php
$login_name=trim(`sqlite ./database/login.db "select value from login_Config where config='name'"`);
$login_password=trim(`sqlite ./database/login.db "select value from login_Config where config='password'"`);

if ($login_name==$_POST['login_name'] && $login_password==$_POST['login_password']){
	session_start();
	$_SESSION['login'] = success;
	header("Location: ./display.php");
	exit; 
}else{
    header("Location: ./display_page/login_error.html");
    exit;
}
?>
