<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$serial = $_POST['serial']; 
	$account = $_POST['account'];
	$time = $_POST['time'];
	$comments = $_POST['comments'];
	$button = $_POST['button'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_學習網</title>
</head>

<body>
<div id="HEADER">
	<h2>電腦科學學習網</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">開始閱讀</a></li> 
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</li>
		<li><a href="group.php">管理團隊</a></li>
		<li><b>管理者專區</b></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>管理者專區<br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if($button === "新增"){
				$sql = "INSERT INTO record (serial, account, time, comments) VALUES ('$serial', '$account', '$time', '$comments')";//要insert的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已新增.....</h3>";
			}
			else if($button === "修改"){
				$sql = "UPDATE record SET serial='$serial', account='$account', time='$time', comments='$comments' WHERE serial='$serial' AND account='$account'";//要update的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已修改.....</h3>";
			}	
						
		?>
		</center>
	</p>	
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Gung-Si Chen</i> </center></h2>
	</p>
</div>
</body>
</html>