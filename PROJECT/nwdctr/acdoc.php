<?php 
 
 $tt = $_GET["id"];
 
   $conn = new mysqli("localhost","infinity","infinity","dctr");


$sql = "select * from tmp where id='$tt';";

$res = $conn->query($sql);

$ro = $res->fetch_assoc();

 $t1 = $ro["id"];
 $t2 = $ro["pas"];
 $t3 = $ro["nm"];
 $t4 = $ro["fd"];
 $t5 = $ro["da"]; 
 $sql = "delete from tmp where id='$tt';";

 $gg = $conn->query($sql);
 if($gg)
 echo "removed from tmp......";
 
 $sql = "insert into doc values('$t1','$t2','$t3','$t4',$t5,0,0);";
$gg = $conn->query($sql);
if($gg)
echo "added to doc";

?>