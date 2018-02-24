
<?php 

$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database pjs";
$n = mysql_query($m,$connection);
$z = mysql_select_db("pjs",$connection) or die ("could not select the database"); 
$a = "create table users(fname varchar(20),sname varchar(20),con integer,email varchar(35))";
$fn = $_POST["fname"]; 
$sn = $_POST["sname"]; 
$c = $_POST["con"]; 
$e = $_POST["email"];
$b=mysql_query($a);
$t = "insert into users values ($fn,$sn,$c,$e)";
$d=mysql_query($t);
$o = mysql_query("select * from users");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);
echo "<table border = '5'>";
echo "<tr><th>fname</th><th>sname</th><th>contact</th><th>email</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['fname'],"</td><td>",$row['sname'],"</td><td>",$row['con'],"</td><td>",$row['email'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);

/*
echo $fn."<br>";
echo $sn."<br/>";
echo $c."<br/>";
echo $e."<br/>";*/


?>
