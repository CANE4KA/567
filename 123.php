<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .my_style{
            color: red;
            background-color: grey;
        }
        .my_style2{
            color: red;
            background-color: blue;
            text-align: right;
            font-size: 72%;
            font-family:'Segoe UI';
        }
        .border{
            border: 5px dashed pink;
        }
    </style>
</head>
    <body>
        <?php
            date_default_timezone_set("Europe/Moscow");
            $time = date("Y-m-d H:i:s", time()); 
        ?>
        <ol>
            <li class="my_style2"><?php echo $time ?>
                <ul>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                </ul>
            </li>
            <li class="my_style2"><?php echo $time ?>
                <ul>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img style="border: 5px dashed red" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img style="border: 5px dashed red" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img style="border: 5px dashed red" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                </ul>
            </li>
            <li class="my_style2"><?php echo $time ?>
                <ul>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                    <li class="my_style"><a href="../567/index.html" title="нажми на меня"><img class="border" src="https://vet-centre.by/wp-content/uploads/2016/11/kot-eti-udivitelnye-kotiki.jpg" alt="Рыжий кот Кекс лежит у ноутбука." width="100" height="100"></a></li>
                </ul>
            </li>
        </ol>
    </body>
</html>