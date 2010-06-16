<?php
    foreach($_SERVER as $h=>$v)
        if(ereg('HTTP_(.+)',$h,$hp))
            echo "<li>$h = $v</li>\n";
        else
            echo "<li>$h = $v</li>\n";
var_dump($_POST); 
?>
