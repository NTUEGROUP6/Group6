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
		<li><b>開始閱讀</b></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p>
	
		<center>
		<h2><?php echo $id; ?>，請選擇閱讀材料<br/></h2>
		<br/>
		<br/>
		
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=reading.php>';
			}
			else {
				$sql = "SELECT * FROM reading";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='form' method='post' action='reading_start.php'>"; 
				echo "<input type='hidden' name='id' value=".$id." />";
				echo "<input type='hidden' name='pw' value=".$pw." />";
								
				echo "<table width=800 border=1>";            
				echo "<tr align=center><td>選取</td><td>編號</td><td>類型</td><td>資料名</td></tr>";		
					
				while($row = mysql_fetch_array($result)){     
					
					echo "<tr align=center><td><input name='select' type='radio' value=".$row['serial']."+".$row['type']."></td>"; //radio屬性，value輸出的內容				
					echo "<td>".$row['serial']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<input type='submit' name='button' value='開始閱讀' />";	
				echo "</form>";
			}
		?>
		<br/><br/>
		<table width="601" border="1">
		  <tr>
		    <td width="101">參考網站</td>
		    <td width="484">內容</td>
	      </tr>
		  <tr>
		    <td><a href="http://www.mathland.idv.tw/game/mathgame.htm">昌爸工作坊</a></td>
		    <td>昌爸數學遊戲網，包含許多有關數學的益智遊戲。</td>
	      </tr>
		  <tr>
		    <td><a href="http://activity.ntsec.gov.tw/math/">國立台灣科學教育館</a></td>
		    <td>國立台灣科學教育館架設的數學遊戲</td>
	      </tr>
		  <tr>
		    <td><a href="http://www.smallcampus.net/building-study/maths/">數學樓</a></td>
		    <td>包含許多有趣的數學遊戲</td>
	      </tr>
		  <tr>
		    <td><a href="http://games.lynms.edu.hk/">李一諤紀念學校益智遊戲網</a></td>
		    <td>益智數學遊戲網，有豐富的數學遊戲</td>
	      </tr>
		  </table>
		<br/><br/><br/><br/><br/><br/><br/>
		<form name="form" method="post" action=" reading.php">
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


