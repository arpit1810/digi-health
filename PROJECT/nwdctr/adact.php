<?php include('masterTop.php');?>
<?php include('masterSidebarAdmin.php');?>

     
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
         
         
          
              $fl = 0;
             
             
                   if("1" == $_POST["id"] )
                   {
                       if("aa" == $_POST["pas"])
                         {
                              $fl = 1;
                          
                             
                         }
                         else
                         {
                             $fl = 2;
                             
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
         
        
        $conn->close();
        ?>
    </div>
   
<?php include('masterBottom.php');?>
