<?php

$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database shashank";
$n = mysql_query($m,$connection);
$z = mysql_select_db("shashank",$connection) or die ("could not select the database"); 
$a = "create table data0(fname varchar(20),sname varchar(20),mail varchar(35),con varchar(15))";
$b=mysql_query($a);

$sql="INSERT INTO data0 (fname, sname, mail,con)

VALUES

('$_POST[fname]','$_POST[sname]','$_POST[email]','$_POST[con]')";

if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }
  echo "1 record added";
$o = mysql_query("select * from data0");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);
echo "<table border = '5'>";
echo "<tr><th>fname</th><th>lname</th><th>mail</th><th>con</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['fname'],"</td><td>",$row['sname'],"</td><td>",$row['mail'],"</td><td>",$row['con'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
?>