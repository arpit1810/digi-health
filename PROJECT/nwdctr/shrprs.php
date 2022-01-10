<html>
    <head>
        
    </head>
    <body>
        <?php 
         
          $t1 = $_GET["cid"];
          $t2 = $_GET["prid"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select * from share where cid='$t1' and prid='$t2';";
          $res = $conn->query($sql);
          if($res->num_rows > 0)
          {
               echo "prescription already shared..";
          }
          else
          {
               $sql = "select * from pres where cid='$t1';";
               $re2 = $conn->query($sql);
               $ro2 = $re2->fetch_assoc();
               $fr = $ro2["did"];
               
               ?>
               
               <form method="POST" action="adshrpr.php">
                   <input type="text" name="cid" value='<?php echo $t1; ?>' hidden>
                   <input type="text" name="prid" value='<?php echo $t2; ?>' hidden>
                   <input type="text" name="did" value ='<?php echo $fr ; ?>' hidden>
                   Comments : <textarea name="det" rows='5' cols='20'></textarea><br><br>
                   <input type="submit" value="Share">
               </form>
               
               
               <?php 
               
                   
                 
          }
        
        ?>
    </body>
</html>