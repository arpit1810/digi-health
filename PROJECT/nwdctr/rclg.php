<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>

        <div id="content">
            <form id="hh" action="recact.php" method="POST">
            <h1 id="bb"><pre>Reception  Login</pre></h1>
            
            <p class="ee">* required field</p>
            <input type="text" class="dd" name="did" placeholder="Doctor Id"><span class="ff" >*</span><br><br><br>
            <input type="text" class="dd" name="id" placeholder="Reception Id"><span class="ff" >*</span><br><br><br>
            <input type="password" class="dd" name="pas" placeholder="Password"><span class="ff" >*</span><br><br><br>
            <input type="submit" value="Submit" id="gg">
            </form>
             <br><br>
         </div>
   
<?php include('masterBottom.php');?>