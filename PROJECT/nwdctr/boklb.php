<html>
    <head>
        
    </head>
    
    <body>
        <?php 
        
    $t1 = $_GET["id"];
        
        
         ?>
         
         <h1>Patient enter your details..</h1>
         <form action="bokptlb.php" method="POST">
            Id:<input type="text" name="id" required><br><br>
            Password : <input type="password" name="pas" required><br><br>
            <input type="text" name="lbid" hidden value='<?php echo $t1;?>'> 
            <input type="submit">
             
         </form>
    </body>
</html>