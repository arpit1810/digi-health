<?php
$tt = $_GET["id"];
 
   $conn = new mysqli("localhost","infinity","infinity","dctr");
   
   $sql = "delete from tmp where id='$tt';";

 $gg = $conn->query($sql);
 if($gg)
 echo "rejected....";
   
   
   
   
   
   
   
   
   ?>