<html>
    <head>
        <style>
            #ui{
                  border : 1px solid black;
                  width : 100px;
                  height : 50px;
                  background-color : lightgrey;
            }
#oo{
    display : none;

}
.er{
     border : 1px solid black;
     background-color : grey;
}
        </style>
    </head>
    <body>
        <?php
         
          $uu = $_GET["cid"];
          $t1 = $_GET["cst"];
           $cv1 = $_GET["da"];
                $conn = new mysqli("localhost","infinity","infinity","dctr");
      
      $wd = date("Y-m-d",strtotime("now"));
      $df = date("d-M-Y",strtotime($wd." + "."$cv1"." days"));
      
        
        $sql = "select * from pres where cid='$uu';";
        $res = $conn->query($sql);
        $ro = $res->fetch_assoc();
       
          $prid = $ro["nop"] + 1;
 
    
        
        echo "Patient id : ".$ro["pid"]."<br><br>";
        echo "Doctor id : ".$ro["did"]."<br><br>"; 
       echo " Valid upto : ".$df."<br><br>";
  
        $rm = $ro["did"];

        
        $ghh = $ro["pid"];
        $sql = "select alg from pat where id='$ghh'; ";
      $rop = $conn->query($sql);
   $row4 = $rop->fetch_assoc();
       $mk = $row4["alg"]; 
       
        ?>
       
      
     
    
        <form  action="dbprs.php"  method="POST" >
            <input type="text" name="cid" value='<?php echo $uu; ?>' hidden ><br>
            Consultaion fees : <input type="text" name="cst" value='<?php echo $t1; ?>'>
            <input type="text" name="prid" value='<?php echo $prid; ?>' hidden ><br><br>
            Validity days : <input type="text" name="da" value='<?php echo $cv1; ?>'  ><br><br>
            Details : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="dt" rows="5" cols="20"></textarea><br><br>
            Medicine :&nbsp;&nbsp;<span onclick="calck()" class='er' >Add Medicine</span>
            <br>
            <div id="yy1"></div>
            <br>
            Tests : &nbsp;&nbsp;<span onclick="calcl()" class='er' >Add Test</span>
            <br>
            <div id="zz1"></div>
            <br>
           <input type="submit">
            
            
        </form>
        <br><br>
          <button  onclick="updalg()"> <a target="op" href=<?php  echo "updalg.php?id=$ghh" ;  ?>>Update allergies</a></button> <br><br>  
        <iframe id="oo" name="op"></iframe> <br><br> 
        
        
        <script>
         /*   function calck()
            {
                alert("hello...");
            }*/
            
            var dd = 0;
            var dd1=0;
            function calck()
            {
                 
                
                 var gg = document.createElement('div');
                 
                 ++dd;
                  gg.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + dd + " : " + "<input type='text' style='width:400px;' name='med[]'><br>";
                 
                 document.getElementById("yy1").appendChild(gg);
                 
                
                 
            }
            
             
            function calcl()
            {
                 
                
                 var gg = document.createElement('div');
                 
                 ++dd1;
                  gg.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + dd1 + " : " + "<input type='text' style='width:400px;' name='test[]'><br>";
                 
                 document.getElementById("zz1").appendChild(gg);
            
                
                 
            }

function updalg()
{
  document.getElementById("oo").style.display = "block";

}
        </script>
         
        
    </body>
</html>