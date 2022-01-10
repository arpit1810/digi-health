<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>

     
      <div id="content">
        <!-- insert the page content here -->
            <form id="hh" action="dctact.php" method="POST">
            <h1 id="bb"><pre>Doctor  Login</pre></h1>
            
            <p class="ee">* required field</p>
            <input type="text" class="dd" name="id" placeholder="Doctor Id"><span class="ff" >*</span><br><br><br>
            <input type="password" class="dd" name="pas" placeholder="Password"><span class="ff" >*</span><br><br><br>
            <input type="submit" value="Submit" id="gg">
            </form>
             <br><br>
            <button id="gg"><a href="nwdct.php" id="z11">New Doctor Request</a></button>
        
      </div>
   
<?php include('masterBottom.php');?>
