<?php

 $id  = $_GET["id"];
$c = oci_pconnect('mama', '20152029', 'localhost/xe');

$s = oci_parse($c, "select NOMBRE,TELEFONO,DIRECCION  from UNO where ID= '".$id."' ");
//'".$id."'
oci_execute($s);

$data = oci_fetch_object($s ); 

 echo json_encode($data);

