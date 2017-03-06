<?php
session_start();
if ($_SESSION['login'] != 'success'){
        header("Location: ./display_page/login_error.html");
	exit;
}

$NAME=trim($_POST['name']);
$CELLPHONE=trim($_POST['customerphone']);
//$AGE=trim($_POST['age_year'].$_POST['age_month'].$_POST['age_day']);
$AGE=trim($_POST['age_year']);
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
$AGE_MONTH=trim($_POST['age_month']);
$AGE_DAY=trim($_POST['age_day']);
$TAKE_CAR=trim($_POST['take_car']);

if(empty($NAME)){
	header("Location:display_page/insert_error.html");
	exit;
}

if(file_exists("database/insert_key")) shell_exec("sudo rm -rf database/insert_key");
if(!empty($NAME)) shell_exec("echo name, >> database/insert_key");
if(!empty($CELLPHONE)) shell_exec("echo cellphone, >> database/insert_key");
if(!empty($AGE)) shell_exec("echo age, >> database/insert_key");
if(!empty($SEARCH_MONTH)) shell_exec("echo search_month, >> database/insert_key");
if(!empty($COMM_ADRESS)) shell_exec("echo comm_adress, >> database/insert_key");
if(!empty($LIVE_ADRESS)) shell_exec("echo live_adress, >> database/insert_key");
if(!empty($SOCIETY_NUMBER)) shell_exec("echo society_number, >> database/insert_key");
if(!empty($COMPANY_NAME)) shell_exec("echo company_name, >> database/insert_key");
if(!empty($COMPANY_PHONE)) shell_exec("echo company_phone, >> database/insert_key");
if(!empty($COMPANY_TITLE)) shell_exec("echo company_title, >> database/insert_key");
if(!empty($COMPANY_NUMBER)) shell_exec("echo company_number, >> database/insert_key");
if(!empty($OLD_CAR)) shell_exec("echo old_car, >> database/insert_key");
if(!empty($NEW_CAR)) shell_exec("echo new_car, >> database/insert_key");
if(!empty($ORDERS_NUMBER)) shell_exec("echo orders_number, >> database/insert_key");
if(!empty($ENGINE_NUMBER)) shell_exec("echo engine_number, >> database/insert_key");
if(!empty($POSE_CAR_DATE)) shell_exec("echo pose_car_date, >> database/insert_key");
if(!empty($LICENSE_NUMBER)) shell_exec("echo license_number, >> database/insert_key");
if(!empty($FORCE_SAFE_NUMBER)) shell_exec("echo force_safe_number, >> database/insert_key");
if(!empty($SAFE_COMPANY_NAME)) shell_exec("echo safe_company_name, >> database/insert_key");
if(!empty($SAFE_LIST_NUMBER)) shell_exec("echo safe_list_number, >> database/insert_key");
if(!empty($CREDIT_BANK_NAME)) shell_exec("echo credit_bank_name, >> database/insert_key");
if(!empty($CREDIT_MONEY)) shell_exec("echo credit_money, >> database/insert_key");
if(!empty($FAVORITE)) shell_exec("echo favorite, >> database/insert_key");
if(!empty($REMARKS)) shell_exec("echo remarks, >> database/insert_key");
if(!empty($AGE_MONTH)) shell_exec("echo age_month, >> database/insert_key");
if(!empty($AGE_DAY)) shell_exec("echo age_day, >> database/insert_key");
if(!empty($TAKE_CAR)) shell_exec("echo take_car, >> database/insert_key");

if(file_exists("database/insert_value")) shell_exec("sudo rm -rf database/insert_value");
if(!empty($NAME)) shell_exec("echo \'".$NAME."\', >> database/insert_value");
if(!empty($CELLPHONE)) shell_exec("echo \'".$CELLPHONE."\', >> database/insert_value");
if(!empty($AGE)) shell_exec("echo \'".$AGE."\', >> database/insert_value");
if(!empty($SEARCH_MONTH)) shell_exec("echo \'".$SEARCH_MONTH."\', >> database/insert_value");
if(!empty($COMM_ADRESS)) shell_exec("echo \'".$COMM_ADRESS."\', >> database/insert_value");
if(!empty($LIVE_ADRESS)) shell_exec("echo \'".$LIVE_ADRESS."\', >> database/insert_value");
if(!empty($SOCIETY_NUMBER)) shell_exec("echo \'".$SOCIETY_NUMBER."\', >> database/insert_value");
if(!empty($COMPANY_NAME)) shell_exec("echo \'".$COMPANY_NAME."\', >> database/insert_value");
if(!empty($COMPANY_PHONE)) shell_exec("echo \'".$COMPANY_PHONE."\', >> database/insert_value");
if(!empty($COMPANY_TITLE)) shell_exec("echo \'".$COMPANY_TITLE."\', >> database/insert_value");
if(!empty($COMPANY_NUMBER)) shell_exec("echo \'".$COMPANY_NUMBER."\', >> database/insert_value");
if(!empty($OLD_CAR)) shell_exec("echo \'".$OLD_CAR."\', >> database/insert_value");
if(!empty($NEW_CAR)) shell_exec("echo \'".$NEW_CAR."\', >> database/insert_value");
if(!empty($ORDERS_NUMBER)) shell_exec("echo \'".$ORDERS_NUMBER."\', >> database/insert_value");
if(!empty($ENGINE_NUMBER)) shell_exec("echo \'".$ENGINE_NUMBER."\', >> database/insert_value");
if(!empty($POSE_CAR_DATE)) shell_exec("echo \'".$POSE_CAR_DATE."\', >> database/insert_value");
if(!empty($LICENSE_NUMBER)) shell_exec("echo \'".$LICENSE_NUMBER."\', >> database/insert_value");
if(!empty($FORCE_SAFE_NUMBER)) shell_exec("echo \'".$FORCE_SAFE_NUMBER."\', >> database/insert_value");
if(!empty($SAFE_COMPANY_NAME)) shell_exec("echo \'".$SAFE_COMPANY_NAME."\', >> database/insert_value");
if(!empty($SAFE_LIST_NUMBER)) shell_exec("echo \'".$SAFE_LIST_NUMBER."\', >> database/insert_value");
if(!empty($CREDIT_BANK_NAME)) shell_exec("echo \'".$CREDIT_BANK_NAME."\', >> database/insert_value");
if(!empty($CREDIT_MONEY)) shell_exec("echo \'".$CREDIT_MONEY."\', >> database/insert_value");
if(!empty($FAVORITE)) shell_exec("echo \'".$FAVORITE."\', >> database/insert_value");
if(!empty($REMARKS)) shell_exec("echo \'".$REMARKS."\', >> database/insert_value");
if(!empty($AGE_MONTH)) shell_exec("echo \'".$AGE_MONTH."\', >> database/insert_value");
if(!empty($AGE_DAY)) shell_exec("echo \'".$AGE_DAY."\', >> database/insert_value");
if(!empty($TAKE_CAR)) shell_exec("echo \'".$TAKE_CAR."\', >> database/insert_value");
$INSERT="insert.sh";
shell_exec('/bin/sh '.$INSERT." insert");

header("Location:display_page/insert_right.html");
/*shell_exec('/bin/sh '.$AUTO_DELETE." insert ".$NAME.' '.$CELLPHONE.' '.$AGE.' '.$SEARCH_MONTH.' '.$COMM_ADRESS.' '.$LIVE_ADRESS.' '.$SOCIETY_NUMBER.' '.$COMPANY_NAME.' '.$COMPANY_PHONE.' '.$COMPANY_TITLE.' '.$COMPANY_NUMBER.' '.$OLD_CAR.' '.$NEW_CAR.' '.$ORDERS_NUMBER.' '.$ENGINE_NUMBER.' '.$POSE_CAR_DATE.' '.$LICENSE_NUMBER.' '.$FORCE_SAFE_NUMBER.' '.$SAFE_COMPANY_NAME.' '.$SAFE_LIST_NUMBER.' '.$CREDIT_BANK_NAME.' '.$CREDIT_MONEY.' '.$REMARKS);
*/

/* Execute default value success.
sqlite insert.db "INSERT INTO insert_Config (name,age,search_month,comm_adress,live_adress,society_number,company_name,company_phone,company_title,company_number,old_car,new_car,orders_number,engine_number,pose_car_date,license_number,force_safe_number,safe_company_name,safe_list_number,credit_bank_name,credit_money,remarks) VALUES ('aaa','','','','','','','','','','','''','','','','','','','','','','')"
*/


/*
$login_name=trim(`sqlite ./database/login.db "select value from login_Config where config='name'"`);
$login_password=trim(`sqlite ./database/login.db "select value from login_Config where config='password'"`);

if ($login_name==$_POST['login_name'] && $login_password==$_POST['login_password']){
    header("Location: ./aaa.html");
    exit; 
}else{
//    alert("帳號：".$_POST['login_name']."\n密碼：".$_POST['login_password']);
    echo "帳號：".$_POST['login_name']."\n密碼：".$_POST['login_password'];
}

//shell_exec("/bin/sh "./dropbox.sh $_POST['login_name'] $_POST['login_password']");   
//$fp = fopen('/tmp/output.txt', 'w');
//echo fprintf($fp,"Welcome to %s.",$_POST['login_password']);
//fclose($fp);

//echo "輸入為:". $login_name; 

//  header("Location: ./bbb.html"); 
//exit;
  
*/
?>
