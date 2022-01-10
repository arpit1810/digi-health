<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
         $t1 = $_POST["cid"];
         $t2 = $_POST["prid"];
         $t3 = $_POST["cst"];
         $t4 = $_POST["dt"];
         $t5 = $_POST["med"];
         $t6 = $_POST["test"];
            $t7 = $_POST["da"];
 
         
         $conn = new mysqli("localhost","infinity","infinity","dctr");
         
         $sql = "update pres set nop='$t2' where cid='$t1' ;";
         $res = $conn->query($sql);
          
           
           $sql = "insert into record values ('$t1','$t2','$t3','$t4',CURRENT_TIMESTAMP,$t7,0);";
           
         $res = $conn->query($sql);
         
    
       foreach($t5 as $tmp)
       {
            if($tmp == "")continue;
            
            $sql = "insert into medi values ('$t1','$t2','$tmp');";
            $conn->query($sql);
       }
       
  $rty=0;
         foreach($t6 as $tmp)
       {
            if($tmp == "")continue;
                  ++$rty;    
            $sql = "insert into test values ('$t1','$t2','$tmp',$rty);";
            $conn->query($sql);
       }
       
       echo "prescription added...";
       
       $sql = "select* from pres where cid='$t1';";
       $re4 = $conn->query($sql);
       $ro4 = $re4->fetch_assoc();
       $d1 = $ro4["pid"];
       $d2 = $ro4["did"];
       
       $sql = "delete from appt where pid='$d1' and did='$d2';";
       $re5 = $conn->query($sql);
       if($re5)
       {echo "delete from appt";}
       else
       {
           echo "not deleted from appt;";
       }
          
        ?>
    </body>
</html>