<?php
require_once __DIR__ . '/mvc/models/users.php';
require_once __DIR__ . '/mvc/views/MarkdownView.php';
require_once __DIR__ . '/mvc/controllers/controller.php';

use patterns\mvc\controllers\Controller;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$controller = new Controller('users.md');
echo "<pre>" . $controller->render() . "</pre>";

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

// Кнопка для просмотра диаграммы классов
echo "<a href='https://sun9-26.userapi.com/impg/UHpsJ9XXVkVeLt-yVvoCzS6f1oa-qj3B-4_JKA/YUCHp-9Ob_A.jpg?size=906x555&quality=95&sign=b3bfd5c1cb44d9772f7db16f2521ea43&type=album' target='_blank' class='diagram-btn'>Просмотреть диаграмму классов</a>";

echo "</body></html>";