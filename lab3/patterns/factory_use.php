<?php
spl_autoload_register();

use Factory\Router;

$users = Router::parse('users');

echo "<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
    <style>

        .diagram-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .diagram-btn:hover {
            background-color: #E9967A;
        }
    </style>
</head>
<body>";

// Вывод списка пользователей
echo "<h2>Список пользователей</h2>";
echo "<pre>";
echo $users->render();
echo "</pre>";

// Кнопка для просмотра диаграммы классов
echo "<a href='https://sun9-77.userapi.com/impg/TsFIULWzyOWh7H9iArGTTDNuuYQmm6SJhdk_Og/TFQkCnVZfQ0.jpg?size=690x719&quality=95&sign=671a7222d59909f8347fcf16b9eecd02&type=album' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>";

echo "</body></html>";

