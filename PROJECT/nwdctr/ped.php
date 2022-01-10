<html>
    <head>
        
    </head>
    
    <body>
        <h1>Pending Reports</h1>
        <?php 
         
          $t1 = $_GET["id"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from pres p,record r,book b where pid='$t1' and p.cid = r.cid  and b.cid = p.cid and  b.prid= r.prid and st=0  order by tm ;";
          $res = $conn->query($sql);
           if($res->num_rows > 0)
           {
                  
                  
                   while($ro=$res->fetch_assoc())
                 {
                       echo "Doctor :".$ro["did"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details : ".$ro["dt"]."&nbsp;&nbsp;&nbsp;<br>Date :".$ro["uptm"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span style='color :red;'>PENDING<span><br><br>";
                       
                        
                      
                      echo "<br><br><br>";
                      
                 }
                 
                 
                 
           }
           
           else
           {
                echo "no peding reports....";
           }
       
          
        
        ?>
    </body>
</html>