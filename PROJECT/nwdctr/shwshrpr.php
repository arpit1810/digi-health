<html>
    <head>
        <style>
            .qwe{
                
                border : 1px solid black;
                width : 500px;
                height : 50px;
            }
        </style>
    </head>
    
    <body>
        <?php 
          
          $t1 = $_GET["id"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select * from follow,share where chid='$t1' and ptid=did order by tm3 desc ;";
          $res = $conn->query($sql);
           
            echo "<h1>Shared prescriptions</h1>";
            if($res->num_rows > 0)
            {
                
                   while($row=$res->fetch_assoc())
            
                   {
                        $et = $row["tm3"];
                        $ww = strtotime($et);
                        $qq = date("d-M-Y",$ww);
                        
                        ?>
                        <div class="qwe">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        echo $row["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["det"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$qq."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        
                        ?>
                        <a href='<?php echo "viwss.php?cid=".$row["cid"]."&prid=".$row["prid"]."&det=".$row["det"]; ?>'>View</a>
                        </div>
                        <?php
                        
                        echo "<br><br>";
                   }
            }
           
           else
           {
                echo "no prescription to be seen";
           }
          
        ?>
    </body>
</html>