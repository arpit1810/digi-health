<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $y1= $_GET["cid"];
          $er = $_GET["prid"];
           $cvv = $_GET["det"];
           $conn = new mysqli("localhost","infinity","infinity","dctr");
         
         
         
         $sql = "select * from record where cid='$y1' and prid='$er';";
           $res = $conn->query($sql);
           
          
           if($res->num_rows > 0)
           {
               
                while($ro=$res->fetch_assoc())
                {  
                      echo "Presciption<br><br>";
                      echo "Details : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["dt2"]."<br><br>";
                    
                      
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
                          
                     
                          
                          echo "<br><br>";
                          
                          
                      
                }
           }
           
           echo "DOCTOR COMMENTS<br>$cvv";
           ?>

          
         
        
        
    </bodys>
</html>