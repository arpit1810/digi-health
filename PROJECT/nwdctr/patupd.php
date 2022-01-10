
<?php
$conn = new mysqli("localhost","infinity","infinity","dctr");

$t1 = $_POST["id"];
$t2 = $_POST["pas"];


$t5 = $_POST["ctn"];

$t7 = $_POST["ad"];
$t8 = $_POST["alg"];



$sql = "update pat set pas='$t2' , cn='$t5' , ad='$t7' , alg='$t8' where id='$t1' ;";

$res = $conn->query($sql);

if($res)
{
     echo "successfully  updated...";
}

else
{
     echo "unsuccessful..";
}


?>