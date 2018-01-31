<?php
class Socio 
{
    protected $c;
    public function __construct()
    {
        $c = oci_pconnect('mama', '20152029', 'localhost/xe');
    }
    public function Create($NOMBRE,$TELEFONO,$DIRECCION)
    {
      
        $s = oci_parse($c,"INSERT INTO UNO (NOMBRE,TELEFONO,DIRECCION) values('$NOMBRE', '$TELEFONO', '$DIRECCION')");
   
        $r = oci_execute($s);
        if($query){
               $out['message'] = " socio aderido ";
           }
           else{
               $out['error'] = true;
               $out['message'] = "salio mal todo";
           }


    }

      
    
}
?>