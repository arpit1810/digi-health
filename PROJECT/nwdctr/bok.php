<html>
    <head>
        
    </head>
    
    <body>
        <?php 
        
        $t1 = $_GET["id"];
        $t2 = $_GET["did"];
        
        
        
         ?>
         
         <h1>Patient enter your details..</h1>
         <form action="bokpt.php" method="POST">
            Id:<input type="text" name="id" required><br><br>
            Password : <input type="password" name="pas" required><br><br>
            <input type="text" name="did" hidden value='<?php echo $t2;?>'>
            <input type="text" name="rcid" hidden value='<?php echo $t1;?>'> 
            <input type="submit">
             
         </form>
    </body>
</html>