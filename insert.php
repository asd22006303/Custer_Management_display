<?php
session_start();
if ($_SESSION['login'] != 'successful'){
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
if(!empty($NAME)){
        $fp = fopen('database/insert_value', 'w');
        fwrite($fp, "'$NAME',");
        fclose($fp);
}
if(!empty($CELLPHONE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$CELLPHONE',");
        fclose($fp);
}
if(!empty($AGE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$AGE',");
        fclose($fp);
}
if(!empty($SEARCH_MONTH)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$SEARCH_MONTH',");
        fclose($fp);
}
if(!empty($COMM_ADRESS)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$COMM_ADRESS',");
        fclose($fp);

}
if(!empty($LIVE_ADRESS)){
	$fp = fopen('database/insert_value', 'a');
	fwrite($fp, "'$LIVE_ADRESS',");
	fclose($fp);
}
if(!empty($SOCIETY_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$SOCIETY_NUMBER',");
        fclose($fp);
}
if(!empty($COMPANY_NAME)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$COMPANY_NAME',");
        fclose($fp);
}
if(!empty($COMPANY_PHONE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$COMPANY_PHONE',");
        fclose($fp);
}
if(!empty($COMPANY_TITLE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$COMPANY_TITLE',");
        fclose($fp);
}
if(!empty($COMPANY_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$COMPANY_NUMBER',");
        fclose($fp);
}
if(!empty($OLD_CAR)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$OLD_CAR',");
        fclose($fp);
}
if(!empty($NEW_CAR)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$NEW_CAR',");
        fclose($fp);
}
if(!empty($ORDERS_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$ORDERS_NUMBER',");
        fclose($fp);
}
if(!empty($ENGINE_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$ENGINE_NUMBER',");
        fclose($fp);
}
if(!empty($POSE_CAR_DATE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$POSE_CAR_DATE',");
        fclose($fp);
}
if(!empty($LICENSE_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$LICENSE_NUMBER',");
        fclose($fp);
}
if(!empty($FORCE_SAFE_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$FORCE_SAFE_NUMBER',");
        fclose($fp);
}
if(!empty($SAFE_COMPANY_NAME)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$SAFE_COMPANY_NAME',");
        fclose($fp);
}
if(!empty($SAFE_LIST_NUMBER)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$SAFE_LIST_NUMBER',");
        fclose($fp);
}
if(!empty($CREDIT_BANK_NAME)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$CREDIT_BANK_NAME',");
        fclose($fp);
}
if(!empty($CREDIT_MONEY)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$CREDIT_MONEY',");
        fclose($fp);
}
if(!empty($FAVORITE)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$FAVORITE',");
        fclose($fp);
}
if(!empty($REMARKS)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$REMARKS',");
        fclose($fp);
}
if(!empty($AGE_MONTH)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$AGE_MONTH',");
        fclose($fp);
}
if(!empty($AGE_DAY)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$AGE_DAY',");
        fclose($fp);
}
if(!empty($TAKE_CAR)){
        $fp = fopen('database/insert_value', 'a');
        fwrite($fp, "'$TAKE_CAR',");
        fclose($fp);
}

	$INSERT="insert.sh";
	shell_exec('/bin/sh '.$INSERT." insert");
	header("Location:display_page/insert_right.html");

/* Not finish	
$return=trim(shell_exec("echo $status"));

if ($return == "error"){
	header("Location:display_page/insert_error.html");
}else{
	header("Location:display_page/insert_right.html");
}
*/
?>
