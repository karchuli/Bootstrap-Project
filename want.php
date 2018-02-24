


<?php
$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database want";
$n = mysql_query($m,$connection);
$z = mysql_select_db("want",$connection) or die ("could not select the database"); 
$a = "create table wants(p1 varchar(20),p2 varchar(20),p3 varchar(35),cat varchar(15), size varchar(15))";
$b=mysql_query($a);

$sql="INSERT INTO wants (p1, p2, p3,cat, size)

VALUES

('$_POST[p1]','$_POST[p2]','$_POST[p3]','$_POST[cat]','$_POST[size]')";

if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }
  echo "1 record added";
$o = mysql_query("select * from wants");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);
echo "<table border = '5'>";
echo "<tr><th>p1</th><th>p2</th><th>p3</th><th>category</th><th>size</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['p1'],"</td><td>",$row['p2'],"</td><td>",$row['p3'],"</td><td>",$row['cat'],"</td><td>",$row['size'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
?>