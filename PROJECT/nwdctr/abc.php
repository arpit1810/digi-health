<html>
    <head></head>
    
    <body>
           <?php 
         // connecting to database and checking for valid user name and password
            $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         
         $tt = $_GET["id"];
$ty= $_GET["did"];
          $sql = "delete from rec where id='$tt' and did='$ty' ;";
         
         $res = $conn->query($sql);
         if($res)
         {
             echo "reception deletion successful...";
         }
         else
         {
              echo "reception del unsuccessful";
         }
         
         $conn->close();
         ?>
        
    </body>
</html>