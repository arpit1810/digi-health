<?php 
 $t1 = $_GET["chid"];
 $t2 = $_GET["ptid"];
 
 $conn = new mysqli("localhost","infinity","infinity","dctr");
 $sql = "select* from follow where chid='$t1' and ptid='$t2';";
 $res = $conn->query($sql);
 
   if($res->num_rows > 0 )
   {
        echo "you are already following  that doctor...";
   }
   else
   {
         $sql = "insert into follow values ('$t1','$t2');";
         $re = $conn->query($sql);
          if($re)
          {
               echo "follow successful";
          }
          else
          {
               echo "follow unsucessful!!!!";
          }
        
   }

?>