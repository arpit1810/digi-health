<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>
<?php
$conn = new mysqli("localhost","infinity","infinity","dctr");

$t1 = $_POST["id"];
$t2 = $_POST["pas"];
$t3 = $_POST["nm"];
$t4 = $_POST["gd"];
$t5 = $_POST["ctn"];
$t6 = $_POST["dob"];
$t7 = $_POST["ad"];
$t8 = $_POST["alg"];

$sql = "insert into pat values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8');";

$res = $conn->query($sql);

if($res)
{
     echo "successfully  added...";
}

else
{
     echo "unsuccessful..";
}


?>
<?php include('masterBottom.php');?>