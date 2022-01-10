<html>
    
    <body>
        <?php 
        
        $tt = $_POST["pst"] ; 
     $t2 = $_POST["did"];
         
         $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         
         
          $sql = "insert into post (tm,abt,did) values (current_timestamp,'$tt','$t2') ;";
         
         $res = $conn->query($sql);
          
           if($res == true)
           {
                header("Location: blog.php?id=$t2");
           }
           else{
               echo "unsuccessful....";
           }
        
        
        ?>
    </body>
</html>