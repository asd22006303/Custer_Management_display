<?php 
if (isset($_GET['execute'])){
		execute_delete();
	}else{
		$remove_id_value = $_POST['remove_id'];
		shell_exec("echo $remove_id_value > ../database/remove_id_value");
	}	

function execute_delete(){
	$remove_id_value = trim(shell_exec("cat ../database/remove_id_value"));
	$db_server = "localhost";
	$db_user = "louis";
	$db_passwd = "louis0626";
	$db_name = "Subaru_DB";

	$con = mysqli_connect("localhost",$db_user,$db_passwd);

	mysqli_query($con, "SET NAMES 'UTF8'");
	mysqli_select_db($con,$db_name);
	$sql ="DELETE FROM customer_info WHERE id=".$remove_id_value;
	$result = mysqli_query($con,$sql);//執行sql語法
	unlink("../database/remove_id_value");
	header("Location:../display.php?Remove=".$remove_id_value);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>警告Warning !!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="../css/sweetalert.css">
        <link href="../css/Styles/Message Board.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<div id="container">
	<img src="../Subaru_mark.png"  align="left" alt="SUBARU">
	<div id="header">
		 <h1>Subaru 顧客管理系統</h1>
        </div>
	<div id="main">
        <script>
        swal({
        title:'確認要刪除此筆客戶資料嗎？',
	text: '不要的話請按取消',
	type: "warning",
	showCancelButton: true,
	confirmButtonClass: "btn-danger",
	confirmButtonText: "Yes, delete it!",
	closeOnConfirm: false
	},
		function(isConfirm) {
			if (isConfirm){
				window.location = 'remove_DB.php?execute=true';
			}else{
				window.location.href = '../display.php';
			}
		}
	);
        </script>
        <img src="../Subaru_Forester.png"  align="right" alt="SUBARU">
        <br></div>
	<div id="footer">
		Customer Management System by Double Smile 2017
	 </div>
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	</div>
       </body>
</html>

