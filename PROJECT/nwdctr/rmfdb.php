<html>
    <head>
        
    </head>
    
    <body>
        <?php 
        
         $t1 = $_GET["cid"];
         $t2 = $_GET["prid"];
         
           $conn = new mysqli("localhost","infinity","infinity","dctr");
           $sql = "update record set fdb=-1 where cid=$t1 and prid=$t2 ;";
           $res= $conn->query($sql);
            if($res)
            {
                 echo "removed..";
                 
            }
            
            else
            {
                 echo "not removed...";
            }
        
        ?>
        
    </body>
</html>