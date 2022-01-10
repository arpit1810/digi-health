<?php
 
 $t1 = $_POST["cid"];
 $t2 = $_POST["prid"];
 $t3 = $_POST["lbid"];
 $t4 = $_POST["oth"];
 
 
 
 $ef = "tst".$t1."_".$t2."_";
 
 $dt = "";
 
  $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from test where cid='$t1' and prid='$t2';";
          $res = $conn->query($sql);
          
          if($res->num_rows > 0)
          {
              
              
            
                 while($ro=$res->fetch_assoc())
                 {
                     // $tst = $_POST[$ro["dt"]];
                      
                       $qw = $ro["nb"];
                       $qw = $ef.$qw;
                       
                       
                if($_POST[$qw] == 'yes')
                {
                     $dt = $dt.$ro["dt"].",";
                } 
                 
                      
                 }
               
               if($t4 == "")
               {
                   
               }  
               
               else{
                    $dt = $dt.$t4;
               }
                 
                 
          }
          
          else{
                // no tests in that presc
                $dt = $dt.",".$t4;
          }
        
         $sql = "select current_timestamp as dd from pat;";
   $rs = $conn->query($sql);
$ro = $rs->fetch_assoc(); 
          $fg = $ro["dd"];
 
$tm = date_create( $fg);
                       $rg = date_format($tm,'Y_m_d_H_i_s');
        
        $sql = "insert into book values ('$t1','$t2','$t3',0,'$dt','$fg','$rg','$fg');";
        $re = $conn->query($sql);
        if($re)
        {
             echo "booking for lab is done..";
        }
        else
        {
              echo "booking not done";
        }
  


 ?>