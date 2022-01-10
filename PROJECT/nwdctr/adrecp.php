<html>
    <head>
        <style>
          
            #dd{
               
                border : 1px solid black;
                width : 500px;
                height : 250px;
            }
        
        </style>
    </head>
    <body>
        <h1>Add Reception</h1>
        <form action="adntrecp.php" method="GET" id="cc">
            Reception id :<input type="text" name="id"><br><br>
            Password :<input type="text" name="pas"><br><br>
            <input type="text" name="did" value='<?php echo $_GET["id"]; ?>' hidden>
            <input type="submit">
        </form>
        
        <br><br><br>
        <h2>Added Reception</h2>
        <div id="dd"> 
          
        
        </div>
        
         <?php 
       // connecting to database and checking for valid user name and password
            $srv = "localhost";
         $usr = "infinity";
         $pas = "infinity";
         $db = "dctr";
         $conn = new mysqli($srv,$usr,$pas,$db);
         
         if($conn->connect_error){
             die("database connection failed: " . $conn->connect_error);
         }
         $rg = $_GET["id"];
         
          $sql = "select * from rec where did='$rg' ;";
         
         $res = $conn->query($sql);
         
         if($res->num_rows > 0)
          {
              $fl = 0;
             while($ro = $res->fetch_assoc())
             {
                 $hh = "abc.php?id=".$ro["id"]."&did=".$ro["did"];
                 ?>
                 
                  <script>
                     var ff = document.getElementById("dd");
                     ff.innerHTML +=  "<br><br>  " + '<?php  echo $ro["id"]; ?>' + '&nbsp;&nbsp;' +'<?php  echo $ro["pas"]; ?>' + '&nbsp;&nbsp;' + "<a href=<?php echo $hh ;?>>remove</a>" ;
                  </script>
                 
                 <?php
             }
          }
          else{
              echo "no reception currently...";
          }
          $conn->close();
        
        
         ?>   
     
    </body>
</html>