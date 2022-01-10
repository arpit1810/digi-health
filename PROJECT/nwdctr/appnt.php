<html>
    <head>
        <style>
            .ji{
                border : 1px solid black; 
                width : 400px;
                height : 50px;
                margin-left : auto;
                margin-right : auto;
            }
        </style>
    </head>
    
    <body>
        <?php 
        
        $t1 = $_GET["id"];
        
        $conn = new mysqli("localhost","infinity","infinity","dctr");
        
        $sql = "select * from appt where did='$t1';";
        $res = $conn->query($sql);
        
        if($res->num_rows > 0)
        {
            $r =0;
             while($ro=$res->fetch_assoc())
             {
                  ++$r;
                  
                  echo "<div class='ji'>";
                  echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$r." : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  echo $ro["nm"];
                  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style='color:red;' href='ptdcac.php?pid=".$ro["pid"]."&did=".$ro["did"]."'>Accept</a></div><br><br>";
                  
             }
        }
        
        else
        {
             echo "<h1>No Appointments currently</h1>";
        }
        
        
        ?>
    </body>
    
    
</html>