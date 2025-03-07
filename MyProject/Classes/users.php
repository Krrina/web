<?php

 require_once "'User.php'";

// Создаем объекты класса User
$user1 = new User("Иван Иванов", "ivan123", "password123");
$user2 = new User("Петр Петров", "petr456", "securePass");
$user3 = new User("Елена Смирнова", "elena789", "mySecret");

// Вызываем метод showInfo() для каждого объекта
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

?>
