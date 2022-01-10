<html>
    <head>
        <style>
            .aa{
                
                border : 1px solid black;
                width : 450px;
                padding : 10px;
                margin-left : auto;
                margin-right : auto;
            }
            
            .bb{
                 border : 1px solid black;
                width : 450px;
                padding : 10px;
                margin-left : auto;
                margin-right : auto;
                background-color : grey;
            }
            .oi{
                 border : 1px solid black;
                 width : 300px;
                 height : 200px;
                display : none;
                margin-left : auto;
                margin-right : auto;
            }
        </style>
    </head>
    
    <body>
       <?php 
       $gt1 = $_GET["id"];
      
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
        <form action="adpst.php" method="post">
            <input type="hidden" name="did" value="<?php echo $gt1;?>">  
       <textarea  name="pst" rows="4" cols="60" placeholder="Make a post"></textarea> <br>
       <input type="submit" value="POST">
       </form>
       </div>
       <br><br><br><br>
        
        <?php 
         
         
         
         
         
         
         
         
         
          $sql = "select * from post order by tm desc ;";
         
         $res = $conn->query($sql);
         $fl=0;
         if($res->num_rows > 0)
          {
             
             while($ro = $res->fetch_assoc())
             {
                 ++$fl;
                 $tyt = "oi".$fl;
                 
                 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ro["tm"]."..By : ".$ro["did"];
                  ?>
          <div class="bb">
        
       <textarea  name="pst" rows="4" cols="60" disabled><?php echo $ro["abt"]; ?></textarea> <br>
       <label onclick="calc('<?php echo $tyt; ?>')">Comment</label>&nbsp;&nbsp;<label onclick="calc2('<?php echo $tyt; ?>')">Hide</label>
      
       </div><br>
       <iframe class="oi" name="rr" id='<?php echo $tyt; ?>' src= <?php echo "cmt.php?id=".$ro["id"]."&did=$gt1";  ?> ></iframe>
          <br><br>
        
        <?php
             }
             }
        ?>
     
       
       <script>
           function calc(tre)
           {
                
                var op = document.getElementById(tre);
                op.style.display="block";
               
                
               
           }
            function calc2(tre)
           {
                
                var op = document.getElementById(tre);
                op.style.display="none";
               
                
               
           }
       </script>
    </body>
</html>