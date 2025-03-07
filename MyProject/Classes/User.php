<?php
namespace MyProject\Classes;

class User{
    public $name;
    public $login;
    private $password;

    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password; 
    }

    public function showinfo(){
        echo "<H2> Создан пользователь с параметрами: </H2>";
        echo "<p> Имя: $name </p>";
        echo "<p> Логин: $login </p>";
        echo "<p> Пароль: $password </p>"; #password_hash используется для хеширования пароля перед выводом
    }

    public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
         $this->password = $password;
        }
}


?>