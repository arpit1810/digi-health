<html>
    <head>
        <style>
            #ry{
                  border : 1px solid black;
                  width : 600px;
                  height : 600px;
            }
        </style>
    </head>
    <body>
       
        <?php 
 
  
          $t1 = $_GET["pid"];
          $t2 = $_GET["did"];
          $t3 = $_GET["cst"];
$cv1 = $_GET["da"];
          echo $t1."...".$t2."<br><br>";
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
        
        $sql = "insert into pres (pid,did,nop,hdst) values ('$t1','$t2',0,0);";
        $res = $conn->query($sql);
        
         if($res)
         {
              echo "case generated....";
              
             $tu =  $conn->insert_id;
             
               
              ?> 
               
               <button><a href='<?php echo "nwprs.php?cid=".$tu."&cst=".$t3."&da=$cv1" ;  ?>' target="pp">NEW  PRESCRIPTION</a></button>
               <br><br><br>
               <iframe name="pp" id="ry"></iframe>
               
               <?php
              
                
         }
         
         else{
              echo  "case not generated..";
         }
         
        
        
        ?>
        
        
        
    </body>
</html>