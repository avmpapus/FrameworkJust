<?php
require_once 'vendor/libs/functions.php';
require_once 'app/controllers/controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Структура Just</title>
    <style>
    img{
        width:100px;
    }

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
        document.getElementById('sok').innerText='Just v2.0 - вторая версия структуры для сайтостроения';
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
    <?php
    echo $cat->age;
    ?>
<div class="title m-b-md" id="title" onmouseenter="title(this)">
                    <?php echo index()?>
                </div>
                <p>
                <div id="sok">Добро пожаловать в структуру PHP</div>
                </p>

<div class="links">
    <a href="/about">About</a>
<a href="/news">News</a>
<a href="/blogs">Blogs</a>
<a href="/contactsus">Contacts Us</a>
<a href="/services">Services</a>
<a href="/new">New</a>
</div>

</div>

</div>
</body>
</html>