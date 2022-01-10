<?php
 

$conn = new mysqli("localhost","infinity","infinity","dctr");

$y = $_POST["id"];
$sql = "select id from doc where id='$y';";
$sql2 = "select id from tmp where id='$y';";
$res = $conn->query($sql);
$res2 = $conn->query($sql2);
if($res->num_rows > 0 || $res2->num_rows > 0 )
{
     echo 0;
}

else
{
     echo 1;
}


?>