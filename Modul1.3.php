<?php
$x=65;//variable global
    function main(){
        $x=$GLOBALS['x'];
        $y=26;//variabe local
        echo "Didalam fungsi <br><br>";
        echo "X=$x<br>";
        echo "Y=$y<br>";
        $GLOBALS['x']=$x+$y;
    }

main();
echo "X=$x";

?>