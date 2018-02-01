<?php

$c = oci_pconnect('mama', '20152029', 'localhost/xe');

$s = oci_parse($c, 'select * from UNO where rownum <= 7
order by ID DESC');


oci_execute($s);

$rows = array();
while($r = oci_fetch_assoc($s)) {
    $rows[] = $r;
}

$locations =(json_encode($rows));

echo $locations
?>