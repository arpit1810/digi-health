<html>
    <head>
        <style>
            .sd{
                border : 1px solid black;
                width : 500px;
                margin-left : auto;
                margin-right : auto;
                height : 50px;
            }
        </style>
    </head>
    
    <body>
        <?php 
          
           $t1 = $_GET["id"];
           
           $conn = new mysqli("localhost","infinity","infinity","dctr");
           $sql = "select * from doc where id != '$t1' ;";
           $res = $conn->query($sql);
           
           if($res->num_rows > 0)
           {
                 
                 while($row=$res->fetch_assoc())
                 {
                     echo "<div class='sd'><br>";
                      echo "<span style='color:red;'>Doctor id :</span>" .$row["id"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>Doctor name :</span>".$row["nm"];
                      $te = $row["id"];
                      ?>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href='<?php echo "foldct.php?chid=$t1&ptid=$te" ;  ?>'>Follow</a>
                      
                      <?php
                      
                      echo "</div>";
                      echo "<br><br>";
                 }
                 
           }
           else
           {
                echo "no doctors..";
           }
          
        ?>
    </body>
</html>