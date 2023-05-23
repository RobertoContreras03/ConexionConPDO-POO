<?php
class ConexionPDO{
    private $host;
    private $db;
    private $user;
    private $password;
    private $conexion;

    public function __construct($host,$db,$user,$password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }
    public function Conectar(){
          try{
                $opcion = array (
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
                $this->conexion= new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user,$this->password,$opcion);
                if ($this->conexion)
                {
                    echo "Conexion exitosa";
                }else{
                    echo "Fallo la conexion";
                }
              }
              catch (PDOException $e){
                echo "ERROR DE CONEXION".$e->getMessage();
                die();
        }
    }
    public function Desconectar()
    {
          $this->conexion= null;
          echo "Base de datos en desconexion";
    }
}
$host = "localhost";
$db = "db_clasepoo";
$user = "root";
$password = "";

?>