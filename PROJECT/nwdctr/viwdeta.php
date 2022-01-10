<html>
    <head>
        
    </head>
    
    <body>
        <?php 
         
          $t1 = $_GET["id"];
          
          $conn = new mysqli("localhost","infinity","infinity","dctr");
          $sql = "select* from docloc where id='$t1'; ";
          $res = $conn->query($sql);
          
          if($res->num_rows > 0)
          {
               while($row=$res->fetch_assoc())
               {
                    echo "Location :".$row["loc"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Details :".$row["deta"]."<br><br>"; 
               }
          }
          else
          {
               echo "no details for this doctor..";
          }
        
        ?>
    </body>
</html>