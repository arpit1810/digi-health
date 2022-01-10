<html>
    <head>
        
    </head>
    <body>
        <?php 
        
          $t1 = $_GET["id"];
           
            $conn = new mysqli("localhost","infinity","infinity","dctr");


$sql = "select * from pat where id='$t1';";

$res = $conn->query($sql);

$ro  = $res->fetch_assoc();


        
        ?>
        
        
          <form  action="patupd.php"  method="POST" >
           
            Mail id : <?php echo $ro["id"];?><input type="text" name="id"  value='<?php echo $ro["id"];?>' hidden><br><br>
            Password : <input type="text"  name="pas" value='<?php echo $ro["pas"];?>' ><br><br>
            Name : <?php echo $ro["nm"];?><br><br>
            Gender : <?php echo $ro["gd"];?><br><br>
            Contact Number : <input type="text" class="hh" name="ctn" value='<?php echo $ro["cn"];?>'><br><br>
            Date Of Birth :<?php echo $ro["dob"];?> <br><br>
            Address : <input type="text"  class="hh" name="ad" value='<?php echo $ro["ad"];?>'><br><br>
            Allergies : <input type="text" class="hh" name="alg" value='<?php echo $ro["alg"];?>'><br><br>         
            <input type="submit" class="hh" value="update">         
                     
        </form>
        
    </body>
</html>