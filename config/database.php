<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
class DataBase{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private static $conn;
    public function __construct() {
        $this->servername = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASS'];
        $this->dbname = $_ENV['DB_NAME'];
    }

    public function getConnection() {
        if(self::$conn === null){
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        }
        return self::$conn;
    }
}