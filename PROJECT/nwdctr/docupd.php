
<?php
$conn = new mysqli("localhost","infinity","infinity","dctr");

$t1 = $_POST["id"];
$t2 = $_POST["pas"];





$sql = "update doc set pas='$t2' where id='$t1' ;";

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