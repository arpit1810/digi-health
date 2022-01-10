<html>
    <head>
        
    </head>
    
    <body>
        <?php 
          $t1 = $_POST["cid"];
          $t2 = $_POST["prid"];
          $t3 = $_POST["did"];
          $t4 = $_POST["det"];
          
       
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "insert into share values ($t1,$t2,'$t3','$t4',CURRENT_TIMESTAMP);";
          $res = $conn->query($sql);
          if($res)
          {      
            echo "Prescription is successfully shared...";   
          } 
          else
          {
               echo "Prescription sharing unsuccessful..";
          }
          
            
        
        ?>
    </body>
</html>