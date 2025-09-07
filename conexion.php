<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

class CConexion {
    public function ConexionBD() {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];

        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
            echo "Conexión correcta";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
