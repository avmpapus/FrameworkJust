<?php
class Cat
{
    public $age;

    public function post(){
        echo '<div style="padding:10px;"><a href="#">Войти</a>&nbsp;&nbsp;<a href="#">Создать аккаунт</a></div>';
    }
}


$cat = new Cat();
$cat->post();
?>
