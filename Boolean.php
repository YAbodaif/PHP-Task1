<?php
$tests = array(1,"traiq",true,7,'s',false);
//all valuse
var_dump($tests);
//Values Expect Boolean 1
foreach ($tests as $key ) {
  echo is_bool($key) ? "" : "$key <br/>";
}
echo "<br/>";
//Values Expect Boolean 1
$i=0;
 while ($i < count($tests)) {
    print_r ( is_bool($tests[$i]) ? "" : "$tests[$i] <br/>") ; 
    $i++;
};
