<html>
    <head>
                <style>
            .ui{
                border : 1px solid black; 
                width : 800px;
                height : 50px;
               
            }
        </style> 
    </head>
    
    <body>
        <?php 
          $t1 = $_GET["id"];
          
          
       $conn = new mysqli("localhost","infinity","infinity","dctr");
        
       $sql = "select* from pat where id='$t1';";
       $res = $conn->query($sql);
       $ro = $res->fetch_assoc();
       
       $dt1 = strtotime("now");
       $dt2 = strtotime($ro["dob"]);
       $tdf = $dt1 - $dt2;
       $sy = 60*60*24*365;
       $yr = round($tdf/$sy);
       
       
       echo "<span style='color:red;'>Name Of Patient : </span>".$ro["nm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>Age : </span>".$yr." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:red;'>Gender : </span>".$ro["gd"]."<br><br>";
         
         
          $sql = "select * from pres where  pid='$t1'";
        $res = $conn->query($sql);
         
          if($res->num_rows > 0)
          {
               while($rr=$res->fetch_assoc())
               {
                 $ef = $rr["cid"]; 
                 
             
                 echo "<div class='ui'><br>&nbsp;&nbsp;";
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
               
                    echo $ko."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rr["did"]."  "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='vwprsptht.php?cid=$ef'>View</a>&nbsp;&nbsp;<a href='chghd.php?cid=$ef&hdst=1'>Hide</a>&nbsp;&nbsp;<a href='chghd.php?cid=$ef&hdst=0'>Unhide</a>&nbsp;&nbsp;"."&nbsp;&nbsp;&nbsp;&nbsp; ";
                    
                     if($rr["hdst"] == 1)
                     {echo "HIDDEN";}
                     else
                     {echo "NOT HIDDEN";}
                     
                    
                    echo "<br><br>";
             
                  echo "</div><br><br>";
               }
          }
        
        
        
        
        
        
        
        // "<a href='vwprsptht.php?cid=$ef'>View</a>&nbsp;&nbsp;<a href='chghd.php?cid=$ef&hdst=1'>Hide</a>&nbsp;&nbsp;<a href='chghd.php?cid=$ef&hdst=0'>Unhide</a>&nbsp;&nbsp;"."..hidden status.. ".$rr["hdst"]."<br><br>";
        ?>
        
        
         
    </body>
</html>