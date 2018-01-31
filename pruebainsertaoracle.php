	
<?php
require __DIR__ . '/claseoracle.php';
$socio = new Socio();
 
echo $socio->insertarSocio('sociomayor','elmejortelefono','calleperro');

echo 'untres';
?>
