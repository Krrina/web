<?php

namespace MyProject\Classes;


require_once __DIR__ . '/User.php';
require_once __DIR__ . '/SuperUserInterface.php';

class SuperUser extends User implements SuperUserInterface{
    public static $count = 0;
    public $role;
    
    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
    $this->role = $role;    
    self::$count++;
    }
    
     public function showInfo() {
        parent::showInfo();
        echo "<p> Роль: " . $this->role . "</p>";
    }
   
       public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => '[скрыт]', 
            'role' => $this->role
        ];
    }
   
    
}




?>