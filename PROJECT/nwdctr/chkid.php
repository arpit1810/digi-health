<?php
 

$conn = new mysqli("localhost","infinity","infinity","dctr");

$y = $_POST["id"];
$sql = "select id from pat where id='$y';";

$res = $conn->query($sql);

if($res->num_rows > 0)
{
     echo 0;
}

else
{
     echo 1;
}


?>