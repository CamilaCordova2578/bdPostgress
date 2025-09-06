<?php
class CConexion {
    public function ConexionBD() {
        $host = 'localhost';
        $dbname = 'bdacademico';
        $user = 'postgres';
        $password = '123456';

        $conn = null;

        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }

        return $conn;
    }
}
?>
