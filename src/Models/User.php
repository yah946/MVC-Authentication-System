<?php 
require_once __DIR__ . '/../Repositories/UserRepository.php';
class User{
    private string $fullName;
    private string $email;
    private string $phone;
    private string $password;
    private string $role;
    public function __construct() {
        $this->fullName = $_POST['name'];
        $this->email= $_POST['email'];
        $this->phone = $_POST['tel'];
        $this->password = $_POST['password'];
        $this->role = $_POST['role'];
        print_r($_POST);
    }
    public function getFullName(){
        return $this->fullName;
    }
    public function getEmail (){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

}
$user = new User();
$userRepo = new UserRepository();
$userRepo->Insert($user);