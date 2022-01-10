<html>
    <head>
        
    </head>
    
    <body>
        <?php 
        
        $t1 = $_GET["id"];
        
        $conn = new mysqli("localhost","infinity","infinity","dctr");
        
        $sql = "select * from appt where did='$t1';";
        $res = $conn->query($sql);
        
        if($res->num_rows > 0)
        {
            $r =0;
             while($ro=$res->fetch_assoc())
             {
                  ++$r;
                  echo "Appointment ".$r.":  ";
                  echo $ro["nm"];
                   ?>
                   &nbsp;&nbsp;
                   <a href='<?php echo "rejapt.php?pid=".$ro["pid"]."&did=".$ro["did"]."&tm=".$ro["tm"] ?>'>Reject</a>
                   <br><br>
                   <?php
             }
        }
        
        else
        {
             echo "no patients currently...";
        }
        
        
        ?>
    </body>
    