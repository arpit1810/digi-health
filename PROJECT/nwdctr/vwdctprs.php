<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $y1= $_GET["cid"];
          $er = $_GET["prid"];
           
           $conn = new mysqli("localhost","infinity","infinity","dctr");
         
         
         
         $sql = "select * from record where cid='$y1' and prid='$er';";
           $res = $conn->query($sql);
           
          
           if($res->num_rows > 0)
           {
               
                while($ro=$res->fetch_assoc())
                {  
                      echo "Presciption <br>";
                      echo "<br>Details : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["dt2"]."<br><br>";
                    
                      
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
                          
                          echo "<br>";
                          
                          
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
                          
                             echo "<br>";
                          
                        echo "Lab Uploads : <br>";
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
                          
                          else
                          {
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
                              <a href='<?php echo $lk; ?>'>Link</a><br>
                              
                              <?php
                         }
                     }
                     else
                     {
                          echo "no self uploads..<br>";
                     }
                    
                    
                         
                         
                         
                         
                          
                          echo "<br>Consultation fees...".$ro["cst"];
                          
                          echo "<br><br>";
                          
                          
                      
                }
           }
           ?>
           
           <a target="ee" href=<?php echo "shrprs.php?cid=$y1&prid=$er"; ?> target="nn">Share</a> <br><br>
<iframe name="ee"></iframe>
          
        
        
        
        
        
    </body>
</html>