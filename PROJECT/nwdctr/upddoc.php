<html>
    <head>
        
    </head>
    <body>
        <?php 
        
          $t1 = $_GET["id"];
           
            $conn = new mysqli("localhost","infinity","infinity","dctr");


$sql = "select * from doc where id='$t1';";

$res = $conn->query($sql);

$ro  = $res->fetch_assoc();


        
        ?>
        
        
          <form  action="docupd.php"  method="POST" >
           
            Mail id : <?php echo $ro["id"];?><input type="text" name="id"  value='<?php echo $ro["id"];?>' hidden><br><br>
            Password : <input type="text"  name="pas" value='<?php echo $ro["pas"];?>' ><br><br>
            Name : <?php echo $ro["nm"];?><br><br>
            Field : <?php echo $ro["fd"];?><br><br>        
            <input type="submit" class="hh" value="update">         
                     
        </form>
        
    </body>
</html>