<?php
    foreach($_SERVER as $h=>$v)
        if(ereg('HTTP_(.+)',$h,$hp))
            echo "<li>$h = $v</li>\n";
        else
            echo "<li>$h = $v</li>\n";
$_POST = array_change_key_case($_POST, CASE_LOWER);
var_dump($_POST);

foreach (array('artist', 'track', 'timestamp', 'album', 'albumartist', 'duration', 'mbid', 'trackNumber', 'context', 'streamId') as $param) {
    $$param = $_POST[$param];
    if (!is_array($$param)) $$param = array($$param);
    print "$param = ";
    var_dump($$param);
}
$artist=$_POST['artist'];
var_dump($artist);

for ($i=0; $i<5;$i++){
    echo "$i\n";
    if (!isset($artist[$i])) {
        echo "not set ";
        echo "trackNumber[{$i}] is not a valid integer.";
    }
    var_dump($artist[$i]);
    
}

?>
