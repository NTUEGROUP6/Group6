<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");   
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
		<li><b>檔案上傳</b></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p align="center"><img src="design/uploadtitle.jpg"></p>  
    <p align="center">
      歡迎使用檔案上傳服務，您可以一次上傳多個檔案。
    </p> 
    <p align="center">
	<center>
    <form method="post" action="uploadconect.php" enctype="multipart/form-data">
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br>
      <input type="file" name="myfile[]" size="50"><br><br>
      <input type="submit" value="上傳">
      <input type="reset" value="重新設定">
    </form>
    </P>
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
