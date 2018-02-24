<?php 

$fn = $_POST["fname"]; 
$sn = $_POST["sname"]; 
$loc = $_POST["loc"]; 
$des = $_POST["des"];
$cat = $_POST["category"];
$sz = $_POST["size"];
//$f = $_POST["facilities[]"];
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['facilities'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['facilities'] as $f){
echo $f."</br>";
}
}
}


echo $fn."<br>";
echo $sn."<br/>";
echo $loc."<br/>";
echo $des."<br/>";
echo $cat."<br/>";
echo $sz."<br/>";
?>