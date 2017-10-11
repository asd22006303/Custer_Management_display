<?php 
session_start();
if ($_SESSION['login'] != 'success'){
        header("Location: ./display_page/login_error.html");
        exit;
}

$db_server = "localhost";
$db_user = "louis";
$db_passwd = "louis0626";
$db_name = "Subaru_DB_display";

$con = mysqli_connect("localhost",$db_user,$db_passwd);
mysqli_query($con, "SET NAMES 'UTF8'");
mysqli_select_db($con,$db_name);
$sql ="select * FROM customer_info WHERE id=".$_POST['edit_id'];
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

function Edit_info($row){
	$name = htmlspecialchars($row['name']);
	$cellphone = htmlspecialchars($row['cellphone']);
	$age = htmlspecialchars($row['age']);
	$age_month = htmlspecialchars($row['age_month']);
	$age_day = htmlspecialchars($row['age_day']);
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
	$take_car = htmlspecialchars($row['take_car']);
	$id = htmlspecialchars($row['id']);

	echo "<div class=form-style-2>";
	echo "<form method=post name=insert_value action=display_page/edit_DB.php>";
	echo "<label for=field1><span>顧客姓名： <span class=required>*</span></span><input type=text class=input-field name=name value=$name ></label>";
	echo "<label for=field1><span>行動電話： <span class=required></span></span><input type=text class=input-field name=customerphone value=$cellphone ></label>";
	echo "<label for=field1><span>出生年齡： <span class=required></span></span></label><br><br>";
	echo "<label for=field1><span>年份 <span class=required></span></span><input type=text class=input-field name=age value=$age > 請輸入年份 ex:1952 </label>";
	echo "<label for=field1><span>月份 <span class=required></span></span><input type=text class=input-field name=age_month value=$age_month > 請輸入月份: 01 ~ 12</label>";
	echo "<label for=field1><span>日期 <span class=required></span></span><input type=text class=input-field name=age_day value=$age_day > 請輸入日期: 1 ~ 31</label>";
	echo "<label for=field1><span>使用者： <span class=required></span></span><input type=text class=input-field name=searchmonth value=$search_month ></label>";
	echo "<label for=field1><span>通訊地址： <span class=required></span></span><input type=text class=input-field name=address value=$comm_adress ></label>";
	echo "<label for=field1><span>戶籍地址： <span class=required></span></span><input type=text class=input-field name=liveadress value=$live_adress ></label>";
	echo "<label for=field1><span>身分證字號： <span class=required></span></span><input type=text class=input-field name=uniformnumbers value=$society_number ></label>";
	echo "<label for=field1><span>領牌月份： <span class=required></span></span><input type=text class=input-field name=take_car value=$take_car > 請輸入月份: 01 ~ 12</label>";
	echo "<label for=field4><span>重點追蹤客戶：</span>";
	echo "<select name=favorite class=select-field>";
		if($favorite=="0"){
			echo "<option value=0 SELECTED>No</option>";
			echo "<option value=1>Yes</option>";
		}else{
			echo "<option value=0 >No</option>";
			echo "<option value=1 SELECTED>Yes</option>";
		}	
	echo "</select></label>";
	echo "<HR>";
	echo "<label for=field1><span>公司行號： <span class=required></span></span><input type=text class=input-field name=companyname value=$company_name ></label>";
	echo "<label for=field1><span>公司電話： <span class=required></span></span><input type=text class=input-field name=companyphone value=$company_phone ></label>";
	echo "<label for=field1><span>公司職稱： <span class=required></span></span><input type=text class=input-field name=companyposition value=$company_title ></label>";
	echo "<label for=field1><span>統一編號： <span class=required></span></span><input type=text class=input-field name=companylinenumber value=$company_number ></label>";
	echo "<HR>";
	echo "<label for=field1><span>保有車型： <span class=required></span></span><input type=text class=input-field name=cartype value=$old_car ></label>";
        echo "<label for=field1><span>洽購車型： <span class=required></span></span><input type=text class=input-field name=ordercartype value=$new_car ></label>";
        echo "<label for=field1><span>訂單編號： <span class=required></span></span><input type=text class=input-field name=orderform value=$orders_number ></label>";
        echo "<label for=field1><span>引擎號碼： <span class=required></span></span><input type=text class=input-field name=enginenumber value=$engine_number ></label>";
        echo "<label for=field1><span>交車日期： <span class=required></span></span><input type=text class=input-field name=deliverday value=$pose_car_date ></label>";
        echo "<label for=field1><span>牌照號碼： <span class=required></span></span><input type=text class=input-field name=carlicensenumber value=$license_number ></label>";
        echo "<HR>";
	echo "<label for=field1><span>強制保險卡： <span class=required></span></span><input type=text class=input-field name=forcedcard value=$force_safe_number ></label>";
        echo "<label for=field1><span>保險公司： <span class=required></span></span><input type=text class=input-field name=insurancecompany value=$safe_company_name ></label>";
        echo "<label for=field1><span>保單號碼： <span class=required></span></span><input type=text class=input-field name=insurancenumber value=$safe_list_number ></label>";
        echo "<label for=field1><span>貸款行庫： <span class=required></span></span><input type=text class=input-field name=loancompany value=$credit_bank_name ></label>";
        echo "<label for=field1><span>貸款金額： <span class=required></span></span><input type=text class=input-field name=loannumber value=$credit_money ></label>";
	echo "<label for=field5><span>備註： <span class=required></span></span><textarea class=textarea-field name=remark >$remarks</textarea></label>";
	echo "<input type=hidden name=edit_id value=$id>";
	echo "<input type=submit value=更新 style=width:80px;height:30px;font-size:15px;/>";
	echo "&nbsp;&nbsp;&nbsp;<a href=display.php>返回資料總覽頁</a>";
	echo "</form>";
        echo "<form action=./display_page/remove_DB.php method=post>";
		echo "<input type=hidden name=remove_id value=$id>";
		echo "<br><input type=submit value=刪除 style=width:80px;height:30px;font-size:15px;/>";
	echo "</form>";
	echo "</div>";

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>顧客單筆資料修改頁</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="css/sweetalert.css">
	<link href="css/Styles/Message Board.css" rel="stylesheet" type="text/css" />
	<link href="css/from.css" rel="stylesheet" />
    </head>
    <body>
	<div id="container">
	<img src="./Subaru_mark.png"  align="left" alt="SUBARU">
	<div id="header">
		 <h1>Subaru 顧客管理系統</h1>
        </div>
	<div id="main">
		<h1>顧客詳細資料</h1>
			<?php
				Edit_info($row);
			?>
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

