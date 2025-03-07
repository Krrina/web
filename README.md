# web
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример меню</title>
    <style>
        /* Базовый стиль для меню (можно изменить по своему вкусу) */
        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Стили для выпадающего меню */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit; /* Важно для наследования шрифта */
            margin: 0; /* Важно для удаления отступов */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

    <nav>
        <a href="#">Главная</a>
        <a href="#">О нас</a>
        <a href="#">Услуги</a>

        <div class="dropdown">
            <button class="dropbtn">Продукты
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Продукт 1</a>
                <a href="#">Продукт 2</a>
                <a href="#">Продукт 3</a>
            </div>
        </div>

        <a href="#">Контакты</a>
    </nav>

    <main>
        <h1>Контент страницы</h1>
        <p>Здесь будет основной контент страницы.</p>
    </main>

</body>
</html>