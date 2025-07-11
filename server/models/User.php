<?php
require_once("Model.php");
class User extends Model {
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string $mobile;

    protected static string $table = "users";
    protected static string $primaryKey = "id";

    public function __construct(array $data) {

        $this->id = $data["id"];
        $this->username = $data["username"];
        $this->email = $data["email"];
        $this->password = $data["password"];
        $this->mobile = $data["mobile"] ;
    }

     public function getId():int {
        return $this->id;

    }
        public function getName():string {
        return $this->username;
        
    }
        public function getEmail():string {
        return $this->email;
        
    }
    public function getPassword(): string {
        return $this->password;
    }

    public function getMobile(): string {
        return $this->mobile;
    }


     public function setName(string $username){
        $this->username=$username;
    }
    
    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setMobile(?string $mobile) {
        $this->mobile = $mobile;
    }

    
    
    public static function findBy(mysqli $mysqli, string $column, $value): ?static {
        $sql = sprintf("SELECT * FROM %s WHERE %s = ?", static::$table, $column);
        $query = $mysqli->prepare($sql);
        $query->bind_param("s", $value);
        $query->execute();
        
        $data = $query->get_result()->fetch_assoc();
        return $data ? new static($data) : null;
    }
    public function toArray(){
    return [
    "id" => $this->id,
    "username" => $this->username,
    "email" => $this->email,
    "password" => $this->password,
    "mobile" => $this->mobile,];
    }   
}


