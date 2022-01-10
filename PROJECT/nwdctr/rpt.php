<html>
    <head>
        
    </head>
    
    <body>
        <h1>Lab Reports</h1>
        <?php 
         
          $t1 = $_GET["id"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from pres p,record r,book b where pid='$t1' and p.cid = r.cid  and b.cid = p.cid and  b.prid= r.prid  and st != 0 order by uptm desc ;";
          $res = $conn->query($sql);
           if($res->num_rows > 0)
           {
                 while($ro=$res->fetch_assoc())
                 {
                       echo "Doctor :".$ro["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details : ".$ro["dt"]."&nbsp;&nbsp;&nbsp;<br>Date :".$ro["uptm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                       
                        $t1 = $ro["cid"];
                        $t2 = $ro["prid"];
                        $t3 = $ro["ktm"];
                      
                       
                      $sql = "select* from link where cid='$t1' and prid='$t2' and  ktm='$t3' order by ct;";
                        $r1 = $conn->query($sql);
                        if($r1->num_rows > 0)
                        {
                            
                           echo "&nbsp;&nbsp;&nbsp;";
                            $tu=0;
                           while($ro2=$r1->fetch_assoc())
                           {
                               ++$tu;
                                 $w1 = $ro2["cid"];
                                 $w2 = $ro2["prid"];
                                 $w3 = $ro2["ktm"];
                                 $w4 = $ro2["ct"];
                                 $w5 = $ro2["ext"];
                               
                               echo "<a target='_blank' href='upload/fl".$w1."_".$w2."_".$w3.$w4.".$w5"."'>Page $tu</a>&nbsp;&nbsp;&nbsp;";
                                
                           }
                        }
                        
                        else
                        {
                             
                             echo "no reports";
                        }
                       
                      
                       
                       
                       echo "<br><br><br><br>";
                 }
           }
           
           else
           {
                echo "no reports....";
           }
       
          
        
        ?>
    </body>
</html>