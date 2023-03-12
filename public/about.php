<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            #sok {
                text-align: center;
                font-size: 14px;
            }

            .title {
                font-size: 84px;
                cursor:pointer;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
</style>
<script src="/public/js/jquery-3.6.0.js"></script>
<script>
$(function(){
    $('.title').on('click',function(){
        document.getElementById('sok').innerText='Just v1.0 - первая версия структуры для сайтостроения';
    })
    $('.title').on('mouseenter',function(){
        document.getElementById('title').style.color = "green";
    }).on('mouseleave',function(){
        document.getElementById('title').style.color = "";
    })
})
</script>
</head>
<body>
<div class="flex-center position-ref full-height">

<div class="content">
<div class="title m-b-md" id="title" onmouseenter="title(this)">
                    Just v1.0
                </div>
                <p>
                <div id="sok">Добро пожаловать в структуру PHP</div>
                </p>

<div class="links">
<a href="/about">О нас</a>
<a href="/news">Новости</a>
<a href="/blogs">Блоги</a>
<a href="/contactsus">Наши контакты</a>
<a href="/services">Услуги</a>
<a href="/new">Обновление</a>
</div>
<h2>О нас</h2>
<img src="/public/images/php_8_released.png" width="180" height="180" alt="">
<img src="/public/images/126-b.jpg" width="300" height="180" alt="">
<img src="/public/images/5f032e566c419.jpg" width="380" height="180" alt="">
</div>

</div>

</body>
</html>