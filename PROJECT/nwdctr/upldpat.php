<html>
    <head>
        
    </head>
    
    <body>
        <?php
        
        $t1 = $_GET["id"];
       
        
              
        $conn = new mysqli("localhost","infinity","infinity","dctr");
  
          

 $sql = "select * from record r,pres a  where  r.cid=a.cid and a.pid='$t1' order by tm2 desc  ;";
        $res = $conn->query($sql);
         
          if($res->num_rows > 0)
          {
               while($rr=$res->fetch_assoc())
               {
                 $ef = $rr["cid"]; $yu=$rr["prid"];
                    echo "Date :".$rr["tm2"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor :".$rr["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";

       $tt = $ef."_".$yu;
?>
<a href='<?php echo "uplself.php?cid=$ef&prid=$yu"; ?>' >Upload</a><br><br>


<?php
               }
          }


              
             
 
         
         ?>
    </body>
    
</html>