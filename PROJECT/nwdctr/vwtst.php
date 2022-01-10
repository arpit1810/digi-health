<html>
    <head></head>
    
    <body>
        <?php
         
          $t1 = $_GET["cid"];
          $t2 = $_GET["prid"];
          $t3 = $_GET["lbid"];
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from test where cid='$t1' and prid='$t2';";
          $res = $conn->query($sql);
          
          if($res->num_rows > 0)
          {
              ?>
              <form action="addptlab.php" method="POST">
                  <input type="text" value='<?php echo $t1;?>' name="cid" hidden>
                   <input type="text" value='<?php echo $t2; ?>' name="prid" hidden>
                   <input type="text" value='<?php echo $t3; ?>' name="lbid" hidden>
              <?php
                 while($ro=$res->fetch_assoc())
                 {
                      $tst = $ro["dt"];
                      
                      echo $tst;
                      
                      $we = "tst".$ro["cid"]."_".$ro["prid"]."_".$ro["nb"];
                      
                      ?>
                      <input type="hidden" name=<?php echo $we; ?> value="no">
                      <input type="checkbox" name=<?php echo $we; ?> value="yes" ><br>
                      
                      <?php
                      
                 }
                 
                 ?>
                 Other : <input type="text" name="oth"><br>
                 <input type="submit">
                 </form>
                 <?php
               
          }
          else
          {
               echo "no test available...";
          }
        
         ?>
    </body>
</html>