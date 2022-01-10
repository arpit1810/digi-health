<html>
    <head>
        
    </head>
    
    <body>
        <?php 
           
          $t1 = $_POST["id"];
          $t2 = $_POST["dat"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from pres p,record r where p.cid = r.cid and did='$t1' and date(tm2) = '$t2' order by tm2;";
          $res = $conn->query($sql);
        $totcst = 0;  
          if($res->num_rows > 0)
          {
               while($ro=$res->fetch_assoc())
               {
                    echo date("H:i:sa",strtotime($ro["tm2"]))."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["pid"];
                    $t1 = $ro["cid"];
                    $t2 = $ro["prid"];
                    
 

                    $totcst += $ro["cst"];
                    ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href=<?php echo "vwdctprs.php?cid=$t1&prid=$t2"; ?> target="nn">View</a> &nbsp;&nbsp;
 



      <br><br>         
                    
                    <?php
                    
                    
               }
               
          }
          else
          {
               echo "no prescription for this day...";
          }
                    
        ?>
        <h5>Total Fees Collected...<?php echo $totcst ;?></h5>
    </body>
</html>