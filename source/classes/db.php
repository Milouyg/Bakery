<!-- Hier maken we de class Database aan en
halen we gegevens van de database op zodat
we deze in products.php kunnen gebruiken -->

<?php
class Database{
    public $instance;
    public $serverName;
    public $dbName;
    public $userName;
    public $password;
    public $errors;

    function __construct($serverName, $dbName, $userName, $password){
        $this->serverName = $serverName;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;
        $this->errors = array();
    }

    function connect(){
        try{
            $this->instance = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password); 
        }
        catch(PDOException $error){
            array_push($this->errors, "<br/>" . $error->getMessage());   
            die();
        }
    }

    function getProducts(){
        $sql = "SELECT * from products";
        $products = array();
        foreach ($this->instance->query($sql) as $row){
            array_push($products, $row); 
        }
        return $products;
    }
}


