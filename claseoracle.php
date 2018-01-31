
<?php  
class Socio
{
 
    /**
     * @var mysqli|PDO|string

 
    /**
     * Task constructor.
     */
    public function __construct()
    {
    $conexion = oci_pconnect('mama', '20152029', 'localhost/xe');
    return $conexion;
    }
 
    /**
     * Add new Task
     *
     * @param $name
     * @param $description
     *
     * @return string
     */
    function insertarSocio( $conexion, $nombre ,$telefono,$direccion)
    {
        $sql = "INSERT INTO UNO VALUES (".$nombre.", '".$telefono."', '".$direccion."')";
         $stmt = oci_parse($conexion, $sql);      // Preparar la sentencia
         $ok   = oci_execute( $stmt );            // Ejecutar la sentencia
         oci_free_statement($stmt);               // Liberar los recursos asociados a una sentencia o cursor
        return $ok;
    }


 
    /**
     * List Tasks
     *
     * @return string
     */
    public function Read()
    {
       
    }
 
 
    /**
     * Update Task
     *
     * @param $name
     * @param $description
     * @param $task_id
     */
    public function Update($name, $description, $task_id)
    {
       
    }
 
    /**
     * Delete Task
     *
     * @param $task_id
     */
    public function Delete($task_id)
    {
        
    }
}
?>