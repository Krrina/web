<?php
#require_once __DIR__ . '/User.php';
#require_once __DIR__ . '/SuperUser.php';

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;


spl_autoload_register(function ($class) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $ds = DIRECTORY_SEPARATOR;
    $filename = $root . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

 echo "<pre>";
 
User::$count = 0;
SuperUser::$count = 0;

  $User1 = new User("Иван Иванов", "ivan123", "password123");
  $User2 = new User("Петр Петров", "petr2007", "securePass");
  $User3 = new User("Елена Смирнова", "elena906090", "mySecret");

echo "<h2>Информация о пользователе: </h2>";
 
  $User1->showInfo(); 
  $User2->showInfo(); 
  $User3->showInfo();
  

  echo "<p> ----------------------------------------------------------------------------- </p>";
  $SuperUser = new SuperUser("SuperUser", "sup", "Ussrersdfs12345", "SuperUser");
  $SuperUser->showInfo(); 
  echo "<p> ----------------------------------------------------------------------------- </p>";
  
   echo "<h2>Подсчет душ:</h2>";
echo "<p>Обычные души: " . User::$count . "</p>";
echo "<p>Супер-души: " . SuperUser::$count . "</p>";


echo "<h2>Массив:</h2>";
  print_r($SuperUser->getInfo());

   echo "<p> ----------------------------------------------------------------------------- </p>"; 
   

   
 echo "</pre>";
?>git pull --ff-only --tags origin main

