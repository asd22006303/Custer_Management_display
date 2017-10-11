<?php
session_start();
if ($_SESSION['login'] != 'successful'){
        header("Location: ./display_page/login_error.html");
        exit;
}

$db_server = "localhost";
$db_user = "louis";
$db_passwd = "louis0626";
$db_name = "Subaru_DB_display";

$relate_key = $_POST['relate_name'];

$con = mysqli_connect("localhost",$db_user,$db_passwd);

mysqli_query($con, "SET NAMES 'UTF8'");
mysqli_select_db($con,$db_name);
$sql ="select * from customer_info where name like '%".$_POST['relate_name']."%'";
$result = mysqli_query($con,$sql);

function Edit_info($row){
	$name = htmlspecialchars($row['name']);
	$cellphone = htmlspecialchars($row['cellphone']);
	$age = htmlspecialchars($row['age']);
	$search_month = htmlspecialchars($row['search_month']);
	$comm_adress = htmlspecialchars($row['comm_adress']);
	$live_adress = htmlspecialchars($row['live_adress']);
	$society_number = htmlspecialchars($row['society_number']);
	$company_name = htmlspecialchars($row['company_name']);
	$company_phone = htmlspecialchars($row['company_phone']);
	$company_title = htmlspecialchars($row['company_title']);
	$company_number = htmlspecialchars($row['company_number']);
	$old_car = htmlspecialchars($row['old_car']);
	$new_car = htmlspecialchars($row['new_car']);
	$orders_number = htmlspecialchars($row['orders_number']);
	$engine_number = htmlspecialchars($row['engine_number']);
	$pose_car_date = htmlspecialchars($row['pose_car_date']);
	$license_number = htmlspecialchars($row['license_number']);
	$force_safe_number = htmlspecialchars($row['force_safe_number']);
	$safe_company_name = htmlspecialchars($row['safe_company_name']);
	$safe_list_number = htmlspecialchars($row['safe_list_number']);
	$credit_bank_name = htmlspecialchars($row['credit_bank_name']);
	$credit_money = htmlspecialchars($row['credit_money']);
	$favorite = htmlspecialchars($row['favorite']);
	$remarks = htmlspecialchars($row['remarks']);
	$id = htmlspecialchars($row['id']);

	echo "<div class=row>";
	echo "<div class=col-sm-4>";
	echo "<h3>顧客姓名：$name </h3>";
	echo "<p>行動電話：$cellphone </p>";
	echo "<p>公司行號：$company_name </p>";
	echo "<p>洽購車型：$new_car </p>";
	echo "<p>備註：$remarks </p>";
	echo "</div>";
	echo "<form method=post name=insert_value action=edit.php>";
		echo "<input type=hidden name=edit_id value=$id>";
		echo "<input type=hidden name=name value=$name>";
		echo "<br>&nbsp;&nbsp;&nbsp;<input type=submit value=詳細 style=width:80px;height:30px;font-size:15px;/>";
	echo "</form>";
	echo "</div>";

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>重點追蹤客戶清單</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/Styles/Message Board.css" rel="stylesheet" type="text/css" />
	<link href="css/from.css" rel="stylesheet" />
<style>
.push_button {
        position: relative;
        width:200px;
        height:40px;
        text-align:center;
        color:#FFF;
        text-decoration:none;
        line-height:43px;
        font-family:'Oswald', Helvetica;
        display: block;
        margin: 30px;
}
.push_button:before {
        background:#f0f0f0;
        background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));
        
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        
        -webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
        -moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
        box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        
        position: absolute;
        content: "";
        left: -6px; right: -6px;
        top: -6px; bottom: -10px;
        z-index: -1;
}

.push_button:active {
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
        top:5px;
}
.push_button:active:before{
        top: -11px;
        bottom: -5px;
        content: "";
}
.red {
        text-shadow:-1px -1px 0 #A84155;
        background: #D25068;
        border:1px solid #D25068;
        
        background-image:-webkit-linear-gradient(top, #F66C7B, #D25068);
        background-image:-moz-linear-gradient(top, #F66C7B, #D25068);
        background-image:-ms-linear-gradient(top, #F66C7B, #D25068);
        background-image:-o-linear-gradient(top, #F66C7B, #D25068);
        background-image:linear-gradient(to bottom, #F66C7B, #D25068);
        
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
}

.red:hover {
        background: #F66C7B;
        background-image:-webkit-linear-gradient(top, #D25068, #F66C7B);
        background-image:-moz-linear-gradient(top, #D25068, #F66C7B);
        background-image:-ms-linear-gradient(top, #D25068, #F66C7B);
        background-image:-o-linear-gradient(top, #D25068, #F66C7B);
        background-image:linear-gradient(top, #D25068, #F66C7B);
}
.blue {
        text-shadow:-1px -1px 0 #2C7982;
        background: #3EACBA;
        border:1px solid #379AA4;
        background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
        background-image:linear-gradient(top, #48C6D4, #3EACBA);
        
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
        -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
        box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
}

.blue:hover {
        background: #48C6D4;
        background-image:-webkit-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-moz-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-ms-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:-o-linear-gradient(top, #3EACBA, #48C6D4);
        background-image:linear-gradient(top, #3EACBA, #48C6D4);
}
</style>
    </head>
    <body>
	<div id="container">
	<img src="./Subaru_mark.png"  align="left" alt="SUBARU">
	<div id="header">
		 <h1>Subaru 顧客管理系統</h1>
        </div>
	<div id="main">
		<h1>關聯搜尋客戶清單</h1>
	<div class="jumbotron">
		<h1>『顧客姓名』<font size="5">相關結果</font></h1>
		<p><font size="1">下方為關聯客戶清單的搜尋結果，僅列出簡單資訊，但可點選各顧客『詳細』按鈕瀏覽詳細資訊內容</font></p>
		<p><font size="5">搜尋關鍵字為：<?php echo "$relate_key"; ?></font></p>
	</div>
			<?php
				while($row = mysqli_fetch_array($result)){
					Edit_info($row);
				}
			?>
		<div style=float:middle;>
		<a href="display.php" class="push_button red">返回顧客總清單</a>
		<a href="insert.html" class="push_button blue">新增新的顧客資料</a>
		</div>

	        <img src="./Subaru_Forester.png"  align="right" alt="SUBARU">
	</div>
	<div id="footer">
		Customer Management System by Double Smile 2017
	 </div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</div>
       </body>
</html>

