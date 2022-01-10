<html>
    <head>
        
    </head>
    <body>
        <?php 
          $ghh = $_GET["id"];
         
 $conn = new mysqli("localhost","infinity","infinity","dctr");         
            $sql = "select alg from pat where id='$ghh'; ";
      $rop = $conn->query($sql);
   $row4 = $rop->fetch_assoc();
   
       $mk = $row4["alg"]; 
           echo $mk; 
        ?>
        
        <form action="updalg2.php" method="POST">
            <input type="text" name="id" value=<?php echo $ghh; ?> hidden>
            Allergies : <input type="text" name="alg" value='<?php echo $mk; ?>' ><br><br> 
            <input type="submit" value="Update">
        </form>
        
    </body>
</html>