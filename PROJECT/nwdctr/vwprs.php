<html>
    <head>
        <style>
            .qww{
                  border : 1px solid black;
                  width : 800px;
            }
        </style>
    </head>
    
    
    <body>
        <?php 
         
          $t1 = $_GET["cid"];
           $t222 = $_GET["cst"];
$fv = $_GET["sta"];
$cv2=$_GET["da"];          
           $conn = new mysqli("localhost","infinity","infinity","dctr");
           
           if($fv == 1)
{
   ?>

 <button> <a href='<?php echo "nwprs.php?cid=$t1&cst=$t222&da=$cv2"; ?>'>Continue</a></button><br><br><br>
<?php
  

}


            
         
           $sql = "select * from record where cid='$t1' order by tm2 desc;";
           $res = $conn->query($sql);
           
           if($res->num_rows > 0)
           {
               
                while($ro=$res->fetch_assoc())
                { 
                    echo "<div class='qww'>";
                    $er = $ro["prid"];
                      echo "Presciption ".$er."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                      
                       if($fv == 1)
                       {
                      ?>
                      
                      <button><a href='<?php  echo "repeatprs.php?cid=$t1&prid=".$ro["prid"]."&cst=$t222&da=$cv2"; ?>'>Repeat</a></button>
                      
                      <?php
                       }
                      echo "<br>Details : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["dt2"]."<br><br>";
                      $y1 = $ro["cid"];
                      
                      $sql= "select* from medi  where cid='$y1' and prid=$er ;";
                      echo "Medicines : <br>";
                       $r2 = $conn->query($sql);
                          if($r2->num_rows > 0)
                          { 
                              $tt=0;
                                 while($ro2=$r2->fetch_assoc())
                                 {
                                      ++$tt;
                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tt." : ".$ro2["dt"]."<br>";
                                 }
                          }
                          
                          
                          
                          
                            $sql= "select* from test  where cid='$y1'  and prid=$er ;";
                      echo "Tests : <br>";
                       $rr2 = $conn->query($sql);
                          if($rr2->num_rows > 0)
                          { 
                              $tt=0;
                                 while($ro2=$rr2->fetch_assoc())
                                 {
                                      ++$tt;
                                       echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tt." : ".$ro2["dt"]."<br>";
                                 }
                          }
                          
                        echo "<br>Lab Uploads : <br>";
                        $sql = "select* from book where cid='$y1' and prid=$er order by tm desc ;";
                           $r3 = $conn->query($sql);
                          if($r3->num_rows > 0)
                          { 
                              $tt=0;
                                 while($ro3=$r3->fetch_assoc())
                                 {
                                      ++$tt;
                                        echo "By lab &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro3["lbid"]." :&nbsp;&nbsp;&nbsp; ".$ro3["dt"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro3["tm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                        
                                        $t1 = $ro3["cid"];
                        $t2 = $ro3["prid"];
                        $t3 = $ro3["ktm"];
                      
                       
                      $sql = "select* from link where cid='$t1' and prid='$t2' and  ktm='$t3' order by ct;";
                        $r1 = $conn->query($sql);
                        if($r1->num_rows > 0)
                        {
                            
                           echo "&nbsp;&nbsp;&nbsp;";
                            $tu=0;
                           while($ro2=$r1->fetch_assoc())
                           {
                               ++$tu;
                                 $w1 = $ro2["cid"];
                                 $w2 = $ro2["prid"];
                                 $w3 = $ro2["ktm"];
                                 $w4 = $ro2["ct"];
                                 $w5 = $ro2["ext"];
                               
                               echo "<a target='_blank' href='upload/fl".$w1."_".$w2."_".$w3.$w4.".$w5"."'>Page $tu</a>&nbsp;&nbsp;&nbsp;";
                                
                           }
                        }
                        
                        else
                        {
                             
                             echo " reports pending";
                        }
                       
                                        
                                        
                                        
                                        
                                        
                                        
                                        echo "<br>";
                                 }
                          }
                          
                          else{
                              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No lab uploads<br>";
                          }
                          
                          
                           echo "<br>Self uploads : <br>";
                    
                    $sql = "select* from upldself where cid=$y1 and prid=$er ;";
                    $re7 = $conn->query($sql);
                    
                     if($re7->num_rows > 0)
                     {
                         while($ro7=$re7->fetch_assoc())
                         {
                              echo $ro7["det"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              $lk = "upload/fl".$ro7["cid"]."_".$ro7["prid"]."_".$ro7["ktm"].".".$ro7["ext"];
                              ?>
                              &nbsp;&nbsp;
                              <a href='<?php echo $lk; ?>'>View</a><br>
                              
                              <?php
                         }
                     }
                     else
                     {
                          echo "no self uploads..<br>";
                     }
                    
                    
                      
                      echo "</div>";    
                          
                          echo "<br><br>";
                      
                }
           }
           
           

    
             
        
        ?>
        
      
    </body>
</html>