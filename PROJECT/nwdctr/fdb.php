<html>
    <head>
        <style>
            
            #pp{
                 display : inline;
                
            }
        </style>
    </head>
    
    <body>
        <h1>Feedbacks</h1>
        <?php 
         $t1 = $_GET["id"];
         
         $conn = new mysqli("localhost","infinity","infinity","dctr");
         $sql = "select * from pres p,record r where p.cid=r.cid and pid='$t1' and fdb=0 order by tm2 desc;";
         $res = $conn->query($sql);
          
           if($res->num_rows > 0)
           {
                 while($row=$res->fetch_assoc())
                 {
                      echo "Doctor : ".$row["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date :".$row["tm2"];
                      
                      ?>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                      <a href='<?php echo  "rmfdb.php?cid=".$row["cid"]."&prid=".$row["prid"] ?>'>Reject</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <form id="pp" method="POST" action='<?php echo  "adfdbrt.php" ?>'>
                          <input type="text" name="cid" value='<?php echo $row["cid"]; ?>' hidden>
                          <input type="text" name="prid" value='<?php echo $row["prid"]; ?>' hidden>
                            Rate it ( 1 to 5 ) : <input type="text" name="rat" min="1" max="5" required>
                            <input type="submit">
                        </form>     
                      <br><br><br><br>
                      
                      <?php
                      
                 }
                 
           }
           else
           {
                echo "no pending feedbacks..";
           }
         
         
        ?>
    </body>
</html>