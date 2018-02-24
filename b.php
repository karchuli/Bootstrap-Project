<?php

$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database shashank";
$n = mysql_query($m,$connection);
$z = mysql_select_db("shashank",$connection) or die ("could not select the database"); 
$a = "create table data2(loc1 varchar(20),loc2 varchar(20),loc3 varchar(35),size varchar(15),category varchar(15))";
$b=mysql_query($a);
$cv=$_POST[loc1];
$sql="INSERT INTO data2 (loc1,loc2,loc3,size,category)

VALUES

('$_POST[loc1]','$_POST[loc2]','$_POST[loc3]','$_POST[size]','$_POST[category]')";

if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }
  echo "1 record added";
$o = mysql_query("select * from data2");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);

echo "<table border = '5'>";
echo "<tr><th>loc1</th><th>loc2</th><th>loc3</th><th>size</th><th>category</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['loc1'],"</td><td>",$row['loc2'],"</td><td>",$row['loc3'],"</td><td>",$row['size'],"</td><td>",$row['category'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database shashank";
$n = mysql_query($m,$connection);
$z = mysql_select_db("shashank",$connection) or die ("could not select the database"); 
$o = mysql_query("select * from data WHERE loc = '$_POST[loc1]' OR loc = '$_POST[loc1]' OR loc = '$_POST[loc1]' AND size = '$_POST[size]' AND category = '$_POST[category]'");
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

echo "<html><body>";
echo "<h3>LOCATION $cv</h3>";
echo "</body></html>";
mysql_close($connection);

?>
