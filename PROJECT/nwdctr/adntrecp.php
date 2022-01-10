<html>
    <body>
        <?php 
              $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         $t1 = $_GET["id"];
         $t2 = $_GET["pas"];
         $t3 = $_GET["did"];
          $sql = "insert into rec  values ('$t1','$t3','$t2');";
         
         $res = $conn->query($sql);
         
          if($res == true)
          {
               echo "reception  added successfully..";
          }
          else
          {
              echo "reception  not added properly..";
          }
          
          $conn->close();
          ?>
          </body>
          </html>