<?php
class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "db_sistema";
    private $conect;

    public function __construct()
    {
        $connectionString = "mysql:host" . $this->host . ";dbname=" . $this->db . ";charset-utf8";

        try {
            $this->conect = new PDO($connectionString, $this->user, $this->password); //conexion a la base de datos con PDO
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ayuda a detectar los errores
            echo "Conexión exitosa";
        } catch (\Throwable $th) {
            //en caso de excepcion hacer esto
            $this->conect = "Error de conexión";
            echo "ERROR: " . $e->getMessage();
        }
    }
}
$conect = new Conexion();
?>
