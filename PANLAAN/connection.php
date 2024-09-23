<<?php 
$newconnection = new Connection();
Class Connection{
    private $server = "mysql:host=localhost;dbnae=crud_database";
    private $user "root";
    private $pass = " ";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCJ_OBJ);
    protected $con;

    public function openConnection(){
        try {
            $this->con = new PDO($this->server,$this->user,$this->pass,$this->options);
            return $this->con;
        } catch (PDOException $th) {
            echo "There is a problem in the connection:".$th->getMessage();
        }
    }
    public function closeConnection(){
        $this->con = null;
    }


};

?>