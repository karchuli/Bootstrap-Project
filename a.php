<?php

$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database shashank";
$n = mysql_query($m,$connection);
$z = mysql_select_db("shashank",$connection) or die ("could not select the database"); 
$a = "create table data(fname varchar(20),sname varchar(20),loc varchar(35),des varchar(15),category varchar(30),size varchar(20),facilities varchar(20))";
$b=mysql_query($a);

$sql="INSERT INTO data (fname, sname, loc, des, category, size, facilities)

VALUES

('$_POST[fname]','$_POST[sname]','$_POST[loc]','$_POST[des]','$_POST[category]','$_POST[size]','$_POST[facilities]')";

if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }
  echo "1 record added";
$o = mysql_query("select * from data");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);

echo "<table border = '5'>";
echo "<tr><th>fname</th><th>lname</th><th>loc</th><th>des</th><th>category</th><th>size</th><th>facilities</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['fname'],"</td><td>",$row['sname'],"</td><td>",$row['loc'],"</td><td>",$row['des'],"</td><td>",$row['category'],"</td><td>",$row['size'],"</td><td>",$row['facilities'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
?>