<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_POST["id"];
          $t2 = $_POST["alg"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr"); 
          $sql = "update pat  set alg='$t2' where id='$t1'; ";
          $res = $conn->query($sql);
          
           if($res)
           {
                echo "allergies updated...";
           }
           else{
                echo "allergies not updated..";
           }
          
        ?>
    </body>
</html>