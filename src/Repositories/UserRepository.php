<?php
require_once __DIR__ . '/../../config/database.php';
class UserRepository{
    public function Insert(User $obj){
        $conn = new DataBase();
        $db = $conn->getConnection();
        $query = 'insert into employee (full_name,email,phone,password,role) values (?,?,?,?,?)';
        $stmt = $db->prepare($query);
        $stmt->execute([$obj->getFullName(),$obj->getEmail(),$obj->getPhone(),password_hash($obj->getPassword(),PASSWORD_DEFAULT),$obj->getRole()]);
    }
}