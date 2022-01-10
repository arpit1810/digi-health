<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>
<?php
$conn = new mysqli("localhost","infinity","infinity","dctr");

$t1 = $_POST["id"];
$t2 = $_POST["pas"];
$t3 = $_POST["nm"];

$t8 = $_POST["fd"];
$t9 = $_POST["da"];

$sql = "insert into tmp values('$t1','$t2','$t3','$t8',$t9);";

$res = $conn->query($sql);

if($res)
{
     echo "request added successfully..";
}

else
{
     echo "unsuccessful request..";
}


?>
<?php include('masterBottom.php');?>