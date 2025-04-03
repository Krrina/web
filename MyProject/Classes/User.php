<?php

namespace MyProject\Classes;
require_once __DIR__ . '/AbstractUser.php';


  class User extends AbstractUser {
      public static $count = 0;
    
   public function showInfo() {
        echo "<p> Имя: $this->name </p>";
        echo "<p> Логин: $this->login </p>";
        #echo "Пароль: ". password_hash($this->password, PASSWORD_DEFAULT); #хеширует пароль
        echo "<p> Пароль: [скрыт] </p>";
         if (get_class($this) === __CLASS__) {
            self::$count++;
        }
    }
    
}
  
?>