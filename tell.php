<?php
$a1=$_POST['fname'];
$a2=$_POST['sname'];
$a3=$_POST['loc'];
$a4=$_POST['des'];
$a5=$_POST['category'];
$a6=$_POST['size'];
$a7=$_POST['facilities'];
//$a8=$_FILES['fileToUpload'];
$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database college2";
$n = mysql_query($m,$connection);
$z = mysql_select_db("college2",$connection) or die ("could not select the database"); 
$a = "create table xyz(fname varchar(20),sname varchar(20),loc varchar(35),des varchar(15),category varchar(15)),size varchar(20),facilities varchar(50))";
$b = mysql_query($a);
//if(isset($_POST['submit'])){//to run PHP script on submit
//if(!empty($_POST['facilities'])){
// Loop to store and display values of individual checked checkbox.
//foreach($_POST['facilities'] as $f){
//echo $f."</br>";
//}}}
$sql="INSERT INTO tells VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7')";
$hj=mysql_query($sql);
$sql2="INSERT INTO tells VALUES('fsd','sf','fsd','fs','fsdf','dfsf','fds')";
$hj1=mysql_query($sql2);
//if (!mysql_query($sql,$connection))
//{
//die('Error: ' . mysql_error());}
echo "1 record added";
$o = mysql_query("select * from tells");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);
echo "<table border = '5'>";
echo "<tr><th>fname</th><th>sname</th><th>loc</th><th>des</th><th>category</th><th>size</th><th>facilities</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['fname'],"</td><td>",$row['sname'],"</td><td>",$row['loc'],"</td><td>",$row['des'],"</td><td>",$row['category'],"</td><td>",$row['size'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
?>