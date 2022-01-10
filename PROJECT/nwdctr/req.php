<html>
    <head></head>
    
    <body>
        <h1>Requests....</h1>
        <?php
        
        $conn = new mysqli("localhost","infinity","infinity","dctr");


$sql = "select id,nm,fd from tmp;";

$res = $conn->query($sql);

if($res->num_rows > 0)
{        
   while($ro=$res->fetch_assoc())
   {
        echo $ro["id"]."......".$ro["nm"].".....".$ro["fd"].".....";
        $rr='acdoc.php?id='.$ro['id'];
         $rt='rjdoc.php?id='.$ro['id'];
        echo "<a href=$rr>accept</a>&nbsp;&nbsp;&nbsp;";
        echo "<a href=$rt>reject</a>";
        echo "<br><br>";
   }
      
    
}
         ?>
    </body>
</html>