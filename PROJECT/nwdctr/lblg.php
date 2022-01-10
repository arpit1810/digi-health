<?php include('masterTop.php');?>
<?php include('masterSidebarLogin.php');?>

        <div id="content">
            <form id="hh" action="lbact.php" method="POST">
            <h1 id="bb"><pre>Lab  Login</pre></h1>
            
            <p class="ee">* required field</p>
            <input type="text" class="dd" name="id" placeholder="Lab Id"><span class="ff" >*</span><br><br><br>
            <input type="password" class="dd" name="pas" placeholder="Password"><span class="ff" >*</span><br><br><br>
            <input type="submit" value="Submit" id="gg">
            </form>
             <br><br>
            <button id="gg"><a href="nwlb.php" id="z11">New Lab Request</a></button>
         </div>
<?php include('masterBottom.php');?>
