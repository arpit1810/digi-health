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
                      echo "Presciption .....<br>";
                      echo "Details...".$ro["dt2"]."<br>";
                    
                      
                      $sql= "select* from medi  where cid='$y1' and prid=$er ;";
                      echo "Medicine : <br>";
                       $r2 = $conn->query($sql);
                          if($r2->num_rows > 0)
                          { 
                              $tt=0;
                                 while($ro2=$r2->fetch_assoc())
                                 {
                                      ++$tt;
                                        echo "Medicine ".$tt." : ".$ro2["dt"]."<br>";
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
                                        echo "Test ".$tt." : ".$ro2["dt"]."<br>";
                                 }
                          }
                          
                       
                          
                          echo "<br><br>";
                          
                          
                      
                }
           }
           ?>
           
        
        <form action="slfuplfnl.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="cid" value='<?php echo $y1; ?>' hidden>
            <input type="text"  name ="prid" value='<?php echo $er; ?>' hidden>
            Details : <textarea name="det" rows="5" cols="20" required ></textarea><br><br>
            Upload a file : <input type="file" name="fl" required ><br><br>
            <input type="submit" value="upload">
        </form>
        
        
        
    </body>
</html>