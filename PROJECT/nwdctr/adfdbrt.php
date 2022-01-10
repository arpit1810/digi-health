<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_POST["cid"];
          $t2 = $_POST["prid"];
          $t3 = $_POST["rat"];
          
          if($t3 == "")
          {
            echo "rating field is empty..";     
          }
          else if($t3 < 1 || $t3 > 5)
          {
               echo "rating outside range";
          }
          else
          {
              $conn = new mysqli("localhost","infinity","infinity","dctr");
              
              $sql ="select * from pres where cid='$t1';";
              $re1 = $conn->query($sql);
              $ro1 = $re1->fetch_assoc();
              $cv1 = $ro1["did"];
              
              
             
           $sql = "update record set fdb=$t3 where cid=$t1 and prid=$t2 ;";
           $res= $conn->query($sql);
            if($res)
            {
                 echo "feedback added";
                  $sql = "update doc set ptt = (ptt + 1),rtt=rtt + $t3  where id='$cv1';  ";
                  $re2 = $conn->query($sql);
                  if($re2)
                  {
                       echo "<br>doctor also updated";
                  }
                  else
                  {
                       echo "<br>doctor not updated";
                  }
                  
                 
            }
            
            else
            {
                 echo "feedback not added...";
            }
        
               
          }
        
        ?>
    </body>
</html>