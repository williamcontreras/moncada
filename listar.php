<?php

$c = oci_pconnect('mama', '20152029', 'localhost/xe');


$s = oci_parse($c, "CALL BUSCATRESP();");


$foo = oci_parse($c, $s);


/* Execute */
$res = oci_execute($foo);

/* Get the output on the screen */
print_r($res, true);
?>