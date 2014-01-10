<?php                                                       //這是我們團隊登入的帳號密碼專區
$host="localhost";
$user="root";
$password="NTUE";
$link=mysql_connect($host,$user,$password);
$query = "SET NAMES 'utf8'";
$result = mysql_query($query);
mysql_select_db("Group6",$link) || die("db error");
?>
