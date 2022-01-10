<html>
    
    <body>
        <?php 
        
        $tt = $_POST["pst"] ; 
        $t1 = $_POST["id"];
        $t2 = $_POST["did"]; 
         $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         
         
          $sql = "insert into comment (frid,tm2,abt2,cdid) values ('$t1',current_timestamp,'$tt','$t2') ;";
         
         $res = $conn->query($sql);
          
           if($res == true)
           {
                $ru = "Location: cmt.php?id=".$t1."&did=$t2";
            header($ru);                
           }
           else{
               echo "unsuccessful....";
           }
        
        
        ?>
    </body>
</html>