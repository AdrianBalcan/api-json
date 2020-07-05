<?php
$json = file_get_contents('https://server.zog.ro/api.php');
#echo $json;
$obj=json_decode($json);
#var_dump(json_decode($json, true));
print $obj->{'c'}

?>
