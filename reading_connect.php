<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM member where account='$id' and password='$pw'";
$row = mysql_fetch_array(mysql_query($sql));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第六組的教學學習網</title>
</head>

<body>
<div id="HEADER">
	<h2>數學遊戲學習網</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><b>歷史紀錄</b></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
	
		<center>
		<h2>閱讀紀錄查詢<br/></h2>
		<br/>
		<br/>
		
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=record.php>';
			}
			else {
				$sql = "SELECT record.account, reading.name, record.time, record.comments FROM record JOIN reading ON reading.serial=record.serial WHERE record.account='$id'";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<table width=800 border=1>";
				echo "<tr align=center><td>姓名</td><td>資料名</td><td>時間</td><td>評論</td></tr>";		
					
				while($row = mysql_fetch_array($result)){ 
					echo "<tr align=center><td>".$row['account']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "<td>".$row['comments']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
		<form name="form" method="post" action=" record.php">
			<input type="submit" name="button" value="回上一頁" />	
		</form>
		
		</center>
		<br/>
		<br/>
	</p>
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>
	      Author by吳映萱&amp;劉柱恩&amp;戴君翰&amp;林利群&amp;李姿盈&amp;曾苡筑<i></i>
		</center></h2>
	</p>
</div>
</body>
</html>


