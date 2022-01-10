<?php 
 $t1 = $_GET["pid"];
 $t2 = $_GET["did"];
 $t3 = $_GET["tm"];
 
 
  $conn = new mysqli("localhost","infinity","infinity","dctr");
        $sql = "delete from appt where pid='$t1' and did='$t2' and tm='$t3';";
        $res = $conn->query($sql);
        
        if($res)
        {
             echo "appointment rejected...";
        }
        
        else
        {
             echo "appointment not rejected...";
        }
 


?>