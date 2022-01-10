<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>
        <div id="content">
            <form id="hh" action="ptact.php" method="POST">
            <h1 id="bb"><pre>Patient  Login</pre></h1>
            
            <p class="ee">* required field</p>
            <input type="text" class="dd" name="id" placeholder="Patient Id"><span class="ff" >*</span><br><br><br>
            <input type="password" class="dd" name="pas" placeholder="Password"><span class="ff" >*</span><br><br><br>
            <input type="submit" value="Submit" id="gg">
            </form>
             <br><br>
            <button id="gg"><a href="nwpt.php" id="z11">New Patient</a></button>
         </div>
<?php include('masterBottom.php');?>