<?php
require_once("./connection/connection.php");
require_once("./models/User.php");
require_once("./BaseController.php");

class UserController extends BaseController{

    private mysqli $mysqli;

    public function __construct(mysqli $mysqli) {
        $this->mysqli = $mysqli;
    }

    public function register(array $data) {
        $existingUser = User::findByEmail($this->mysqli, $data['email']);
        if ($existingUser){
            return $this->error_response("Email already exist");
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $user = User::create($this->mysqli, $data);

        if ($user){
            return $this->success_response("User registered successfully");
        } else {
            return $this->error_response("Registration failed");
        }
    }
    
    public function login(array $data) {
        $user = User::findByEmail($this->mysqli, $data['email']);

        if ($user && password_verify($data['password'], $user->getPassword())) {
            return $this->success_response("Login successful");
        }
    else {
        return $this->error_response("Invalid credentials");
    }

}
}