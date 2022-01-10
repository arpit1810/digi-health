<html>
    <head>
        
    </head>
    
    <body>
        <?php 
        
        $t1= $_GET["cid"];
        $t2 = $_GET["hdst"];
        
        $conn = new mysqli("localhost","infinity","infinity","dctr");
        $sql = "update pres set hdst=$t2 where cid='$t1' ;";
        $res = $conn->query($sql);
        
        if($res)
        {
             echo "updated...";
        }
        
        else{
             echo "not updated...";
        }
        
        
        ?>
    </body>
</html>