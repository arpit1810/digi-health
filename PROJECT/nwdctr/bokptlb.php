<html>
    <head>
        
    </head>
    
    <body>
        <?php
        
        $t1 = $_POST["id"];
        $t2 = $_POST["pas"];
        $t3 = $_POST["lbid"];
        
              
        $conn = new mysqli("localhost","infinity","infinity","dctr");
        $sql = "select nm from pat where id='$t1' and pas='$t2';";
        $res = $conn->query($sql);
        
        if($res->num_rows > 0)
        {
             
             $ro = $res->fetch_assoc();
             $t5=$ro["nm"];
            echo "Welcome to lab system ".$t5."<br><br>";
             
          

 $sql = "select * from record r,pres a  where  r.cid=a.cid and a.pid='$t1' order by tm2 desc  ;";
        $res = $conn->query($sql);
         
          if($res->num_rows > 0)
          {
               while($rr=$res->fetch_assoc())
               {
                 $ef = $rr["cid"]; $yu=$rr["prid"];
                    echo "Date :".$rr["tm2"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor :".$rr["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ";

       $tt = $ef."_".$yu;
?>
<a href='<?php echo "vwtst.php?cid=$ef&prid=$yu&lbid=$t3"; ?>' target='<?php echo $tt ;?>'">View</a><br>
<iframe name='<?php echo $tt ;?>' ></iframe><br><br>

<?php
               }
          }


              
             
        }
        else{
            echo "invalid id or password";
        }
         
         ?>
    </body>
    
</html>