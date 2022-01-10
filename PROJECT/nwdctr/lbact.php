<?php include('masterTop.php');?>
<?php include('masterSidebarLab.php');?>

     
      <div id="content">
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
         
         
          $sql = "select id,pas,nm from lab ;";
         
         $res = $conn->query($sql);
         
         if($res->num_rows > 0)
          {
              $fl = 0;
             while($ro = $res->fetch_assoc())
             {
                   if($ro["id"] == $_POST["id"] )
                   {
                       if($ro["pas"] == $_POST["pas"])
                         {
                              $fl = 1;
                          
                              break;
                         }
                         else
                         {
                             $fl = 2;
                             break;
                         }
                   }
                 
             }
             
             if($fl == 0)
             {
                ?>
                <script>alert("invalid id...");</script>
                <?php
             }
             else if($fl == 2)
             {
                 ?>
                  <script>alert("invalid password...");</script>
                 <?php
             }
             else if($fl == 1)
             {
                 // successful  acoount entry
               ?>
 
               
               
               <br><br>
               <iframe id="ff" name="nn"></iframe>
           
               <?php
               // back to php code
             }
         }
         else{
               ?>
               <script>alert("no rows in the table");
               <?php
         } 
        
        $conn->close();
        ?>
    </div>
   
<?php include('masterBottom.php');?>