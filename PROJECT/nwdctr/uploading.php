<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_POST["cid"];
          $t2 = $_POST["prid"];
          $t3 = $_POST["tm"];
        //  $t4 = $_POST["tstup"];
        $t4 = $_POST["va"];
        //echo $t4;
        
        for($i=0;$i<$t4;++$i)  
        {
           $ext = pathinfo($_FILES["fl"]["name"][$i],PATHINFO_EXTENSION);
           
          
           $lk = "upload/fl".$t1."_".$t2."_".$t3.$i.".".$ext;
           
           //$lk = "upload/fil.".$ext;
               move_uploaded_file($_FILES["fl"]["tmp_name"][$i] , $lk);
               
             $conn = new mysqli("localhost","infinity","infinity","dctr");
             $sql = "insert into link values('$t1','$t2','$t3','$i','$ext')";
             $res = $conn->query($sql);   
               
            
        }
         
       echo "file uploaded..";
       
       $sql = "update book set st=$t4,uptm=CURRENT_TIMESTAMP where cid='$t1' and prid='$t2' and ktm='$t3' ;";
       $conn = new mysqli("localhost","infinity","infinity","dctr");
       $rre = $conn->query($sql);
       
        
        ?>
    </body>
</html>