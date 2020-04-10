<?php
while($input = trim(fgets(STDIN))){
    $array = explode(",",$input);
    $key = $array[0];
    $value = $array[1];
    $item[$key] = $value;
}
print_r($item);
?>
