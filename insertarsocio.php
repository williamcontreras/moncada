<?php
 

  
$data = json_decode(file_get_contents("php://input"));

$nombre= $data->snombre;
$telefono =$data->stelefono;
$direccion =$data->sdireccion;
$c = oci_pconnect('mama', '20152029', 'localhost/xe');

$s = oci_parse($c,"INSERT INTO UNO (NOMBRE,TELEFONO,DIRECCION) values('$nombre', '$telefono', '$direccion')");

 $r = oci_execute($s);
 if($query){
		$out['message'] = " socio aderido ";
	}
	else{
		$out['error'] = true;
		$out['message'] = "salio mal todo";
	}
oci_commit($c);
/*
$query = "
    INSERT INTO album
    (artist, title)
    VALUES
    (:artist, :title)
";


$result = oci_parse($conn, $query);

//bind a varible into the resource statement
oci_bind_by_name($result, ":artist", $artist);
oci_bind_by_name($result, ":title", $title);
oci_execute($result, OCI_DEFAULT);

//commit transaction
oci_commit($conn);
$message = "Successfully added!";
?>
*/

?>
