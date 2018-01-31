<?php
 $NOMBRE = $_POST['snombre'];
 $TELEFONO = $_POST['stelefono'];
 $DIRECCION = $_POST['sdireccion'];

$c = oci_pconnect('mama', '20152029', 'localhost/xe');

$s = oci_parse($c,"INSERT INTO UNO (NOMBRE,TELEFONO,DIRECCION) values('$NOMBRE', '$TELEFONO', '$DIRECCION')");

 $r = oci_execute($s);
 if($query){
		$out['message'] = " socio aderido ";
	}
	else{
		$out['error'] = true;
		$out['message'] = "salio mal todo";
	}
	?>

