<html>
    <head>
        
    </head>
    
    <body>
        <?php
         
          $t1 = $_POST["cst"];
          $t2 = $_POST["pid"];
          $t3 = $_POST["did"];
          $t4 = $_POST["rcid"];
          $t5 = $_POST["nm"];
$t6  = $_POST["da"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          
          $sql = "insert into appt values ('$t2','$t3','$t4','$t5',CURRENT_TIMESTAMP,$t1,$t6);";
          $res = $conn->query($sql);
        
         if($res)
         {
              echo "appointment is fixed...";
         }
         else
         {
             echo "appointment not set up";
         }
        
         ?>
    </body>
</html>