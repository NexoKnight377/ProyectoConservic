
<?php 
session_start();
class Conectar {
protected $dbh;
    protected function Conexion(){
        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=conservic_nk","root","");
            return $conectar;
        } catch (Exception $e) {
            print "¡Error en la Conexión de BD conservic!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta(){
        return "http://localhost:80/conservic2.0";
    }
}


/* 


<?php 
session_start();

class Conectar {
    protected static $dbh;
    protected static function Conexion(){
        try {
            $conectar = new PDO("mysql:host=localhost;dbname=conservic_nk","root","");
            self::$dbh = $conectar;
            return $conectar;
        } catch (Exception $e) {
            print "¡Error en la Conexión de BD conservic!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function set_names(){
        return self::Conexion()->query("SET NAMES 'utf8'");
    }

    public static function ruta(){
        return "http://localhost:80/conservic2.0";
    }
}



*/