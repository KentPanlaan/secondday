<?php
$newconnection = new Connection();


Class Connection{
    private $server = "mysql:host=localhost;dbname=panlaan";
    private $user ="root";
    private $pass="";
    private $options=
    array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ);
    protected $con;

    public function openConnection(){
        try {
            $this->con = new PDO($this->server,$this->user,$this->pass,$this->options);
            return $this->con;
        } catch (PDOException $th) {
            echo"There is a problem in the connection". $th->getMessage();
        }
    }

public function closeConnection(){
    $this->con = null;
}

public function addStudent(){
    if(isset($_POST['addstudent'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        
        
        
        
        
        try{
            $connection = $this->openConnection();
            $query="INSERT INTO new_tables(first_name,`last_name`,`email`,`gender`,`birthdate`,`address`) VALUES (?,?,?,?,?,?)";
            $stmt =$connection->prepare($query);
            $stmt->execute([$first_name,$last_name,$email,$gender,$birthdate,$address]);
        }catch(PDOException $th){
        
            echo"Error:".$th->getMessage();
        }
        }
}


}


?>