<?php
$db_server = "localhost";
$db_user = "louis";
$db_passwd = "louis0626";
$db_name = "Subaru_DB";

$con = mysqli_connect("localhost",$db_user,$db_passwd);
mysqli_query($con, "SET NAMES 'UTF8'");
mysqli_select_db($con,$db_name);

$NAME=trim($_POST['name']);
$CELLPHONE=trim($_POST['customerphone']);
$AGE=trim($_POST['age']);
$AGE_MONTH=trim($_POST['age_month']);
$AGE_DAY=trim($_POST['age_day']);
$SEARCH_MONTH=trim($_POST['searchmonth']);
$COMM_ADRESS=trim($_POST['address']);
$LIVE_ADRESS=trim($_POST['liveadress']);
$SOCIETY_NUMBER=trim($_POST['uniformnumbers']);
$COMPANY_NAME=trim($_POST['companyname']);
$COMPANY_PHONE=trim($_POST['companyphone']);
$COMPANY_TITLE=trim($_POST['companyposition']);
$COMPANY_NUMBER=trim($_POST['companylinenumber']);
$OLD_CAR=trim($_POST['cartype']);
$NEW_CAR=trim($_POST['ordercartype']);
$ORDERS_NUMBER=trim($_POST['orderform']);
$ENGINE_NUMBER=trim($_POST['enginenumber']);
$POSE_CAR_DATE=trim($_POST['deliverday']);
$LICENSE_NUMBER=trim($_POST['carlicensenumber']);
$FORCE_SAFE_NUMBER=trim($_POST['forcedcard']);
$SAFE_COMPANY_NAME=trim($_POST['insurancecompany']);
$SAFE_LIST_NUMBER=trim($_POST['insurancenumber']);
$CREDIT_BANK_NAME=trim($_POST['loancompany']);
$CREDIT_MONEY=trim($_POST['loannumber']);
$REMARKS=trim($_POST['remark']);
$FAVORITE=trim($_POST['favorite']);
$TAKE_CAR=trim($_POST['take_car']);

if(empty($NAME)){
	header("Location:insert_error.html");
	exit;
}

$sql ="UPDATE customer_info SET name='$NAME',cellphone='$CELLPHONE',age='$AGE',age_month='$AGE_MONTH',age_day='$AGE_DAY',search_month='$SEARCH_MONTH',comm_adress='$COMM_ADRESS',live_adress='$LIVE_ADRESS',society_number='$SOCIETY_NUMBER',company_name='$COMPANY_NAME',company_phone='$COMPANY_PHONE',company_title='$COMPANY_TITLE',company_number='$COMPANY_NUMBER',old_car='$OLD_CAR',new_car='$NEW_CAR',orders_number='$ORDERS_NUMBER',engine_number='$ENGINE_NUMBER',pose_car_date='$POSE_CAR_DATE',license_number='$LICENSE_NUMBER',force_safe_number='$FORCE_SAFE_NUMBER',safe_company_name='$SAFE_COMPANY_NAME',safe_list_number='$SAFE_LIST_NUMBER',credit_bank_name='$CREDIT_BANK_NAME',credit_money='$CREDIT_MONEY',remarks='$REMARKS',favorite='$FAVORITE',take_car='$TAKE_CAR' WHERE id=$_POST[edit_id]";

$result = mysqli_query($con,$sql);
header("Location:edit_right.html");
?>

