<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_GET["id"];
            
        
        
        ?>
        
        <form action="datrec.php" method="POST">
            <input type="text" value='<?php echo $t1; ?>' name='id' hidden>
            Enter Date : <input type="date"  name="dat" required ><br><br>
             <input type="submit">  
        </form>
    </body>
</html>