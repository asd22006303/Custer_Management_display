<?php
session_start();
if ($_SESSION['login'] != 'success'){
	header("Location: ./display_page/login_error.html");
	exit;
}
//unset($_SESSION['login']);

$db_server = "localhost";
$db_user = "louis";
$db_passwd = "louis0626";
$db_name = "Subaru_DB";

$con = mysqli_connect("localhost",$db_user,$db_passwd);
if (!$con)
{
      die('Could not connect: ' . mysqli_error($con));
}
mysqli_query($con, "SET NAMES 'UTF8'");
mysqli_select_db($con,$db_name);

$sql = "SELECT * from customer_info ORDER BY id DESC";
$result = mysqli_query($con,$sql);

function show_info($row){
	    $name = htmlspecialchars($row['name']);
	    $cellphone = htmlspecialchars($row['cellphone']);
	    $age = htmlspecialchars($row['age'].$row['age_month'].$row['age_day']);
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

	    if ($favorite == "0"){
		$favorite_string = 'No';
	    }else{
		$favorite_string = 'Yes';
	    }
	    // htmlspecialchars() 可以將DB內包含<>轉換成純字元，不是HTML網頁符號
	        echo "<div style=overflow-x:auto;>";
	    	echo "<table><tr>";
			echo "<td><font color=blue><i>顧客姓名: </i>".$name."</font></td>";
			echo "<td>行動電話: ".$cellphone."</td></tr>";
			echo "<tr><td>出生年齡: ".$age."</td>";
			echo "<td>使用者: ".$search_month."</td></tr>";
			echo "<tr><td>通訊地址: ".$comm_adress."</td>";
			echo "<td>身分證字號: ".$society_number."</td></tr>";
			echo "<tr><td>戶籍地址: ".$live_adress."</td>";
			echo "<td><font color=#FF0000>重點追蹤客戶: ".$favorite_string."</font></td></tr>";
			echo "<td>領牌月份: ".$take_car."</td></tr>";
			echo "<tr><td>公司行號: ".$company_name."</td>";
			echo "<td>公司電話: ".$company_phone."</td></tr>";
			echo "<tr><td>公司職稱: ".$company_title."</td>";
			echo "<td>統一編號: ".$company_number."</td></tr>";
			echo "<tr><td>保有車型: ".$old_car."</td>";
			echo "<td>洽購車型: ".$new_car."</td></tr>";
			echo "<tr><td>訂單編號: ".$orders_number."</td>";
			echo "<td>引擎號碼: ".$engine_number."</td></tr>";
			echo "<tr><td>交車日期: ".$pose_car_date."</td>";
			echo "<td>牌照號碼: ".$license_number."</td></tr>";
			echo "<tr><td>強制保險卡: ".$force_safe_number."</td></tr>";
			echo "<tr><td>保險公司: ".$safe_company_name."</td>";
			echo "<td>保單號碼: ".$safe_list_number."</td></tr>";
			echo "<tr><td>貸款行庫: ".$credit_bank_name."</td>";
			echo "<td>貸款金額: ".$credit_money."</td></tr>";
		echo "</table><br/>";
			echo "備註:<br> ".$remarks."";
		echo "</div>";
		echo "<div align=right>";
			echo "<table width=300 height=50>";
				echo "<form action=edit.php method=post>";
					echo "<input type=hidden name=edit_id value=$row[id]>";
					echo "<input type=submit value=修改 />&nbsp;&nbsp;";
				echo "</form>";
				echo "<form action=./display_page/remove_DB.php method=post>";
					echo "<input type=hidden name=remove_id value=$row[id]>";
					echo "<input type=submit value=刪除 />";
				echo "</form>";
			echo "</table>";
		echo "</div>";
		echo "<HR><br/>";
}
?>
	<script>
	function Remove(){
        swal({
	title:'Deleted!',
	text: '刪除成功!! 返回客戶資料頁面',
	type: 'success',
	confirmButtonClass: "btn-danger",
	closeOnConfirm: false});
	}
	</script>
<html><head>
        <meta charset="utf-8" />
	<title>顧客資料總清單</title>
        <style type="text/css">
          .grid { margin: 4px; border-collapse: collapse; width: 600px; }
          .grid th, .grid td { border: 1px solid #C0C0C0; padding: 5px; }
          .head { background-color: #E8E8E8; font-weight: bold; color: #FFF; }
          .alt { background-color: #E8E8E8; color: #000; }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sweetalert.css">
	<link href="css/Styles/Message Board.css" rel="stylesheet" type="text/css" />
	<link href="css/from_display.css" rel="stylesheet" />

	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
	</style>
<!-- 特殊Button CSS -->
<style>
  @import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);
  body{
		background: #ECECEC;
		margin:0px ;
		color:#333;
	}
	a.button{
		background: #ECECEC;
		border-radius: 15px;
		padding: 10px 20px;
		display: block;
		font-family: arial;
		font-weight: bold;
		color:#7f7f7f;
		text-decoration: none;
		text-shadow:0px 1px 0px #fff;
		border:1px solid #a7a7a7;
		width: 145px;
		margin:20px auto;
		margin-top:20px;
		box-shadow: 0px 2px 1px white inset, 0px -2px 8px white, 0px 2px 5px rgba(0, 0, 0, 0.1), 0px 8px 10px rgba(0, 0, 0, 0.1);
		-webkit-transition:box-shadow 0.5s;
	}
	a.button i{
		float: right;
		margin-top: 2px;
	}
	a.button:hover{
		box-shadow: 0px 2px 1px white inset, 0px -2px 20px white, 0px 2px 5px rgba(0, 0, 0, 0.1), 0px 8px 10px rgba(0, 0, 0, 0.1);
	}
	a.button:active{
		box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.5) inset, 0px -2px 20px white, 0px 1px 5px rgba(0, 0, 0, 0.1), 0px 2px 10px rgba(0, 0, 0, 0.1);
		background:-webkit-linear-gradient(top, #d1d1d1 0%,#ECECEC 100%);
	}
</style>

	
</head>
<body>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div id="container">
        	<img src="Subaru_mark.png"  align="left" alt="SUBARU">
	<div id="header">
		<h1>Subaru 顧客管理系統</h1>
	</div>
	<div id="main">
	<div id="myTabContent" class="tab-content">
		<ul id="myTab" class="nav nav-tabs">
			<li class="active"><a href="#all_info" data-toggle="tab">顧客資料總覽頁</a></li>
			<li><a href="#search_function" data-toggle="tab">特殊搜尋頁</a></li>
		</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="all_info">
		</div>
		<div class="tab-pane fade" id="search_function">
			<a href="birthday.php" class="button">本月生日客戶<i class="icon-chevron-right"></i></a>
			<a href="important.php" class="button">重點追蹤客戶<i class="icon-chevron-right"></i></a>
			<div class=form-style-2>
                                <h2>關聯資料搜尋：</h2>
                                <form action=relate.php method=post>
                                        <label for=field1 ><span>顧客姓名:<span class=required></span></span><input type=text class=input-field name=relate_name >&nbsp;&nbsp;<input type=submit value=搜尋></label>
                                </form>
                                <form action=use.php method=post>
                                        <label for=field1 ><span>使用者:<span class=required></span></span><input type=text class=input-field name=use_name >&nbsp;&nbsp;<input type=submit value=搜尋></label>
                                </form>
                                <form action=month.php method=post>
                                        <label for=field1 ><span>領牌月份:<span class=required></span></span><input type=text class=input-field name=month >&nbsp;&nbsp;<input type=submit value=搜尋> 輸入01~12</label>
                                </form>
                	</div>
		</div>
	</div>
                <h1>顧客資料總覽</h1>
                <div align=right>
		<a href=insert.html>新增新的顧客資料</a><br>
                        目前所有顧客資料數目:<?php echo mysqli_num_rows($result);?>
                </div>
		<div id="db_value">
    		<?php
    			while($row = mysqli_fetch_array($result)){
        			show_info($row);
    			}
		?>
		</div>
	<img src="Subaru_Forester.png"  align="right" alt="SUBARU">
     </div>
<!-- 製作網頁瞬間跳上功能 -->
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' onmouseover="this.src='http://4.bp.blogspot.com/-AKP9Gl_ets0/TmzrRBJPg_I/AAAAAAAADpY/M3KVvsDNJbA/s1600/Top.png'" src="http://1.bp.blogspot.com/-_gUa3K1wDNo/TmzrHROhBVI/AAAAAAAADpU/vOKm_7zL8DQ/s1600/Top_medium.png" onmouseout="this.src='http://1.bp.blogspot.com/-_gUa3K1wDNo/TmzrHROhBVI/AAAAAAAADpU/vOKm_7zL8DQ/s1600/Top_medium.png'" /></a>

<script>
// 切割Remove DB 回傳的URL值
function urlArgs(){ 
	var args = {}; 
	var query = location.search.substring(1); 
	var pairs = query.split('&'); 
	for(var i = 0; i < pairs.length; i++){ 
		var pos = pairs[i].indexOf('='); 
			if(pos == -1) continue; 
		var name = pairs[i].substring(0,pos); 
	var value = pairs[i].substring(pos + 1); 
	value = decodeURIComponent(value); 
	args[name] = value; 
} 
return args; 
}
var args = urlArgs(); 
var status_remove = args.Remove;
	if ( status_remove != null)
	{
	Remove();
	}
</script>
		<div id="footer">
		Customer Management System by Double Smile 2017
		</div>
	</div>
</body></html>
