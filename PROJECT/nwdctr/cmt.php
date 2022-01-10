<html>
    <head>
        <style>
           .aa{
                
                border : 1px solid black;
                width : 250px;
                height : 90px;
                padding : 4px;
                margin-left : auto;
                margin-right : auto;
            }  
          
                    
        </style>
    </head>
    <body>
        <?php 
           
            $tt = $_GET["id"];
            
           $gf = $_GET["did"]; 
            
            
               $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         
         
         ?>
         
          <div class="aa">
       <form action="adcmt.php" method="post">
        <input type="hidden" name="id" value="<?php echo $tt;?>">    
        <input type="hidden" name="did" value="<?php echo $gf;?>">  
       <textarea  name="pst" rows="4" cols="30" placeholder="Comment.."></textarea> <br>
       <input type="submit" value="COMMENT">
       </form>
       </div>
       <br><br><br>
         
         <?php
         
         
         
          $sql = "select * from comment  where frid='$tt' order by tm2 desc ;";
         
         $res = $conn->query($sql);
        
         if($res->num_rows > 0)
          {
             
             while($ro = $res->fetch_assoc())
             {
                 
                echo $ro["tm2"]." By : ".$ro["cdid"];
                  ?>
         
       <textarea  name="pst" rows="2" cols="30" disabled><?php echo $ro["abt2"]; ?></textarea> <br>

      
 
  
          <br>
        
        <?php
             }
             }
             
             $conn->close();
        ?>
            
            
            
            
            
            
            
            
            
            
       
      
             
        
        
    </body>
</html>