<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>апчхи</title>
    <style>
        body {
            background-color: #F5F0E1; 
            margin: 0; 
            font-family: sans-serif; 
        }

        .top-bar {
            background-color: #333; 
            height: 40px; 
            width: 100%; 
        }

        main {
            padding-top: 10px;
            padding-left: 20px; 
        }

        .custom-list {
            list-style-type: disc;
            list-style-position: outside; 
            padding-left: 20px; 
            margin-bottom: 20px;
            color: #553311; 
        }
       
        .custom-list a {
            text-decoration: none; 
            color: #553311; 
        }
      
        h1 {
            color: #553311; 
        }
        
        .coffee-bean {
            position: fixed;
            bottom: 10px; 
            right: 10px; 
            width: 50px; 
            height: auto; 
            z-index: 1000; 
        }

        .corner-icon {
            position: fixed;
            bottom: 10px;
            left: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            transition: transform 0.3s;
            z-index: 1000;
        }

        .corner-icon:hover {
            transform: scale(1.2);
        }

        main {
            padding: 20px;
        }
        
        .coffee-bean:active {
            transform: scale(0.95);
        }
        
        /* Стили для выпадающего списка */
        .dropdown {
            position: relative;
            display: list-item;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            max-width: 300px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            margin-left: 20px;
            list-style-type: none;
            padding-left: 0;
            overflow-y: auto;
            max-height: 70vh;
            left: 0;
            right: auto;
        }
        
        .dropdown-content a {
            color: #553311;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 600px) {
            .dropdown-content {
                right: 0;
                left: auto;
                max-width: 90vw;
            }
        }
    </style>
</head>
<body>

    <div class="top-bar"></div>

    <main>
        <h1>Лабы</h1>
        <ul class="custom-list">
            <li><a href="http://lab6.ru.swtest.ru/test/1/">Act1</a></li>
            <li><a href="http://lab6.ru.swtest.ru/test/2/">Act2</a></li>
            <li><a href="http://lab6.ru.swtest.ru/test/3/">Act3</a></li>
            <li><a href="http://lab6.ru.swtest.ru/nums/5/6/2/">num</a></li>
            <li><a href="http://lab6.ru.swtest.ru/">show</a></li>
            <li><a href="http://lab6.ru.swtest.ru/user/1/name/">key</a></li>
            <li><a href="http://lab6.ru.swtest.ru/user/all/">all</a></li>
            <li><a href="http://lab6.ru.swtest.ru/user/first/3/">first</a></li>
            <li><a href="http://lab6.ru.swtest.ru/product/1/">showproduct</a></li>
            <li><a href="http://lab6.ru.swtest.ru/products/all/">allproducts</a></li>
        </ul>
    </main>

    <audio id="coffeeSound" preload="auto">
        <source src="https://drive.google.com/file/d/1sKR4z3LaQaja6chw0n7wrFb_9kl6ASzB/view?usp=sharing" type="audio/mpeg">
    </audio>

    <script>
        document.getElementById('coffeeBean').addEventListener('click', function() {
            var sound = document.getElementById('coffeeSound');
            sound.currentTime = 0; // Перематываем звук в начало
            sound.play();

            this.style.transform = 'scale(0.9)';
            setTimeout(() => {
                this.style.transform = 'scale(1.1)';
            }, 100);
        });
    </script>

    <img src="pngwing.com.png" alt="Кофейное зерно" class="coffee-bean" id="coffeeBean">
    
    <a href="https://uml.planttext.com/plantuml/png/ZP8zQyCm48PtWVx3GPQO9bcycGn9EmNQgOIEuIehZeWjcPECAOx_UzLASPHIIhNTU_S-zu4srY6vhgbX__BCcJqhtI9X0w96Qs7W3FnxH76ko7IwV3Ar8NWxAITZob0fASYpFC-3kYKoVIgEd766xzOH2XVXsnZkhQJGwG4qDh80hojT1QKsbTAfD8FMktlVzxxmS116Uw4JRlw5MGJhOYhFGjrm7MC4UpBzJX_DFBiYIXa9MPmvZ9gEEFYJEIL64FuWhW2bNKYajCJxshMI_WKWK_zOlf8k40j08lo8OE-GT4GXR_3T90r_Mk-Elhuibz-xSNQB9oHdlz3NbzKgBU5i8tNfFz0d" target="_blank">
        <img src="https://sun9-9.userapi.com/impg/ZJU5MBTIXtG3h30jTPfy6RAfKuRMVsFUIDSj7w/ltMu6Aed5dI.jpg?size=382x327&quality=95&sign=9f6f7e45b55567f04c426789c96dddba&type=album" alt="Иконка" class="corner-icon" title="beep-beep">
    </a>

</body>
</html>