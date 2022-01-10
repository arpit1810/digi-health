<html>
    <head>
        
    </head>
    <body>
        <?php 
         $t1 = $_GET["cid"];
         $t2 = $_GET["prid"];
         $t3 = $_GET["tm"];
        $t4 = $_GET["lbid"];
      
       
         
        ?>
        
        <br><br>
        
        <button onclick="calck()"> Upload more files </button><br><br>
        <form  action="uploading.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="cid" value='<?php echo $t1;?>' hidden>
            <input type="text" name="prid" value='<?php echo $t2;?>' hidden>
            <input type="text" name="tm" value='<?php echo $t3;?>' hidden>
            <input type="text" name="va" id="ff" hidden> 
            
            <div id="yy1"></div>
            <input type="submit" value="Save">
        </form>
        
         <button><a href=<?php echo "vwtstbkg.php?id=$t4"; ?>>Cancel</a></button>
        
        
        
        <script>
            var dd=0;
            function calck()
            {
                 
                
                 var gg = document.createElement('div');  // "+dd+ "
                 
                 ++dd;
                  gg.innerHTML = "Upload " + dd + " : " + "<input type='file'  name='fl[]'><br>";
                 
                 document.getElementById("yy1").appendChild(gg);
                 document.getElementById("ff").value = dd;
                
                 
            }
        </script>
        
    </body>
</html>