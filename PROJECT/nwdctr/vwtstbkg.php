<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_GET["id"];
           
           $conn = new mysqli("localhost","infinity","infinity","dctr");
            
           $sql = "select* from book where lbid='$t1' and st=0 order by tm;";
           $res = $conn->query($sql);
            
             if($res->num_rows > 0)
             {
                  while($ro=$res->fetch_assoc())
                  {
                      $wd = $ro["cid"];
                        $sql = "select* from pres where cid=$wd ; ";
                        $re4 = $conn->query($sql);
                        $ro4 = $re4->fetch_assoc();
                        
                       
                      
                       echo "Date :".$ro["tm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details :".$ro["dt"]."&nbsp;&nbsp;&nbsp;&nbsp;<br>Patient :".$ro4["pid"]."&nbsp;&nbsp;";
                       
                       $ci = $ro["cid"];
                       $pr = $ro["prid"];
                       $tm = date_create( $ro["tm"]);
                       $rg = date_format($tm,'Y_m_d_H_i_s');
                       
                       ?>
                       
                       <button><a href=<?php echo "uplo.php?cid=$ci&prid=$pr&tm=$rg&lbid=$t1"; ?>>UPLOAD</a></button><br><br>
                       
                       <?php
                  }
                 
             }
             else
             {
                  echo "no pending requests..";
             }
            
           
        
        ?>
    </body>
</html>
