<html>
    <head>
        
    </head>
    
    <body>
        <?php 
          $t1 = $_POST["id"];
          $t2 = $_GET["did"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
        
        $sql = "select * from appt where did='$t2' and pid='$t1';";
        $res = $conn->query($sql);
        $ro = $res->fetch_assoc();
        
         $t3 = $ro["cst"];
        
         /*
         $sql = "delete from appt where did='$t2' and pid='$t1';";
        $res = $conn->query($sql);
        */
       $sql = "select* from pat where id='$t1';";
       $res = $conn->query($sql);
       $ro = $res->fetch_assoc();
       
       echo "welcome...".$ro["nm"]." <br><br>gender : ".$ro["gd"]."<br><br>";
         
         
          $sql = "select * from pres where  pid='$t1';";
        $res = $conn->query($sql);
         
          if($res->num_rows > 0)
          {
               while($rr=$res->fetch_assoc())
               {
                 $ef = $rr["cid"]; 
                    echo "case by doctor id:".$rr["did"]."  "."<a href='vwprs.php?cid=$ef&cst=$t3'>View</a>"."<br><br>";
               }
          }
        
        ?>
        
         <button><a href='<?php echo "nwcas.php?pid=$t1&did=$t2&cst=$t3" ; ?>'>New Case</a></button>
         
    </body>
</html>