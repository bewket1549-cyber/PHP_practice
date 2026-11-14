<?php
$weight=array("abebe"=>70,"alemu"=>50,"abay"=>55);
$sum=0;
foreach($weight as $k=>$v){
    echo $sum+=$weight[$k];
    echo "<br>";
}
/*krsort($weight);
foreach($weight as $k=>$v){
    echo $k."  ".$weight[$k]."<br>";
}*/
?>