<html>
    <head>
        
    </head>
    
    <body>
        <?php
        
        $t1 = $_POST["id"];
        $t2 = $_POST["pas"];
        $t3 = $_POST["did"];
        $t44 = $_POST["rcid"];
        
        $conn = new mysqli("localhost","infinity","infinity","dctr");
        $sql = "select nm from pat where id='$t1' and pas='$t2';";
        $res = $conn->query($sql);
        
        if($res->num_rows > 0)
        {
             echo "welcome to appointment...";
             $ro = $res->fetch_assoc();
             $t55=$ro["nm"];
             // load appoints with validity date from database
$sql = "select tm2,da from pres p,record r where p.cid=r.cid and did='$t3' order by tm2 desc; ";
$res2 = $conn->query($sql);

        $sql = "select * from doc where id='$t3';";
$re = $conn->query($sql);
 $ro22 = $re->fetch_assoc();
 
    $er = $ro22["da"];

  if($res2->num_rows > 0)
{
    echo "<br>Last appointment...";
   $ro2=$res2->fetch_assoc();
 echo $ro2["tm2"]."....".$ro2["da"]."<br>";
$t4 = $ro2["tm2"];
$t5 = $ro2["da"];
$qww = strtotime($ro2["tm2"]."+ $t5 days");
$qw = date("Y-m-d",$qww);


$vg = date("Y-m-d");






$fgr=0;



if($vg <= $qw)
{
   echo "within validity.. ";
   $as2 =intval((strtotime("now") - strtotime($t4))/(60*60*24));
   $fgr = $t5 - $as2;
}

else

{
  echo " outside validity";
  $fgr = $er;
}

}

else
{
   echo "no prescription till now..";
   $fgr = $er;
} 

              ?>
              
              <form action="apt.php" method="POST">
                  <br>
              Cost :<input type="text" name="cst" value="0" required ><br><br>
              Validity days : <input type="text" name="da" value='<?php echo $fgr;  ?>'><br><br>
              <input type="text" value='<?php echo $t1;?>' name="pid" hidden>
              <input type="text" value='<?php echo $t3;?>' name="did" hidden>
              <input type="text" value='<?php echo $t44;?>' name="rcid" hidden>
              <input type="text" value='<?php echo $t55;?>' name="nm" hidden>
              <input type="submit">
              </form>
              <?php
        }
        else{
            echo "invalid id or password";
        }
         
         ?>
    </body>
    
</html>