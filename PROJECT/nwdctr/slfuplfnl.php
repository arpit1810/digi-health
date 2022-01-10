<?php 
 
  $t1 = $_POST["cid"];
  $t2 = $_POST["prid"];
  $t3 = $_POST["det"];
  
  $ee = pathinfo($_FILES["fl"]["name"],PATHINFO_EXTENSION);
  
  
  $ww = strtotime("now");
  $gh = date("Y_m_d_H_i_s",$ww);
   
   $upl = "upload/fl".$t1."_".$t2."_".$gh.".".$ee;
  
   move_uploaded_file($_FILES["fl"]["tmp_name"],$upl);
   
   $conn = new mysqli("localhost","infinity","infinity","dctr");
   $sql = "insert into upldself values ($t1,$t2,'$gh','$t3','$ee');";
   $res = $conn->query($sql);
   if($res)
   {
        echo "file uploading success";
   }
   else
   {
        echo "file upload unsuccessful";
   }


?>