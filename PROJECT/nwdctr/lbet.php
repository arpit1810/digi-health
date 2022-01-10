<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>
<?php
$conn = new mysqli("localhost","infinity","infinity","dctr");

$t1 = $_POST["id"];
$t2 = $_POST["pas"];
$t3 = $_POST["nm"];


$sql = "insert into lab values('$t1','$t2','$t3');";

$res = $conn->query($sql);

if($res)
{
     echo "lab added successfully..";
}

else
{
     echo "unsuccessful lab request..";
}


?>
<?php include('masterBottom.php');?>