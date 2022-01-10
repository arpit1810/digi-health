<html>
    <head>
         <style>
            .ui{
                border : 1px solid black; 
                width : 400px;
                height : 50px;
               
            }
        </style>
    </head>
    
    <body>
        <?php 
          $t1 = $_GET["pid"];
          $t2 = $_GET["did"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
        
        $sql = "select * from appt where did='$t2' and pid='$t1';";
        $res = $conn->query($sql);
        $ro = $res->fetch_assoc();
        
         $t3 = $ro["cst"];
        $cv1 = $ro["da"];
       
    /*     $sql = "delete from appt where did='$t2' and pid='$t1';";
        $res = $conn->query($sql);
      */
       $sql = "select* from pat where id='$t1';";
       $res = $conn->query($sql);
       $ro = $res->fetch_assoc();
       
       $dt1 = strtotime("now");
       $dt2 = strtotime($ro["dob"]);
       $tdf = $dt1 - $dt2;
       $sy = 60*60*24*365;
       $yr = round($tdf/$sy);
       
       
       echo "<span style='color:red;'>Name Of Patient : </span>".$ro["nm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>Age : </span>".$yr." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>Gender : </span>".$ro["gd"]."<br><br>";
         
         
          $sql = "select * from pres where  pid='$t1' and hdst=0;";
        $res = $conn->query($sql);
         
          if($res->num_rows > 0)
          {
               while($rr=$res->fetch_assoc())
               {
                 $ef = $rr["cid"]; 
                 
                  if($rr["did"] == $t2)
                   {  echo "<div class='ui' style='color : red;'><br>&nbsp;&nbsp;";}
                 else
                 {echo "<div class='ui'><br>&nbsp;&nbsp;";}
                  $sql = "select  tm2 from record where cid=$ef order by tm2 desc; ";
                  $we  = $conn->query($sql);
                  $ko = "N.A.";
                   
                    if($we->num_rows > 0)
                    {
                          $ro = $we->fetch_assoc();
                          $fo = $ro["tm2"];
                          $ko = date("d-M-Y",strtotime($fo));
                    }
$tgh=0;
                 if($t2 == $rr["did"])
                    {
                            $tgh = 1;              
                }
                    echo $ko."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rr["did"]."  "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='vwprs.php?cid=$ef&cst=$t3&sta=$tgh&da=$cv1'>View</a>"."<br><br>";
             
                  echo "</div><br><br>";
               }
          }
        
        ?>
        
         <button><a href='<?php echo "nwcas.php?pid=$t1&did=$t2&cst=$t3&da=$cv1" ; ?>'>New Case</a></button>
         
    </body>
</html>