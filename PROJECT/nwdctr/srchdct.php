<html>
    <head>
        
    </head>
    
    <body>
        <?php 
          
          $t1 = $_POST["fd"];
          $t2 = $_POST["loc"];
          $srv = "localhost";
           $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         
         if($t2 == "")
         {
          
          $sql = "select* from doc  where  fd='$t1'  order by (rtt/ptt) desc;";
         $res = $conn->query($sql);
          
           if($res->num_rows > 0)
           {
                while($row=$res->fetch_assoc())
                {
                     echo "Doctor id :".$row["id"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name :".$row["nm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Field :".$row["fd"];
                     
                     
                     ?>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a target="nn" href=<?php echo "viwdeta.php?id=".$row["id"] ; ?>>View Detalis</a>
                     <br><br>
                     <?php
                }
           }
           else
           {
                echo "no doctors with such credentials..";
           }
               
            
          
          
             
         }
         
         else
         {
         
         $sql = "select* from doc d,docloc dl where d.id = dl.id and fd='$t1' and loc='$t2' order by (rtt/ptt) desc;";
         $res = $conn->query($sql);
          
           if($res->num_rows > 0)
           {
                while($row=$res->fetch_assoc())
                {
                      echo "Doctor id :".$row["id"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name :".$row["nm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Field :".$row["fd"];
                     
                     
                     ?>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a target="nn" href=<?php echo "viwdeta.php?id=".$row["id"] ; ?>>View Detalis</a>
                     <br><br>
                     <?php
                }
           }
           else
           {
                echo "no doctors with such credentials..";
           }
           
         }
        
        ?>
    </body>
</html>