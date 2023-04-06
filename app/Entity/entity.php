<?php

 class entity{

    public function getIndex(){
       
        echo '<a href="/about">About</a>
        <a href="/news">News</a>
        <a href="/blogs">Blogs</a>
        <a href="/contactsus">Contacts Us</a>
        <a href="/services">Services</a>
        <a href="/new">New</a>';
    
    }
} 
$entity = new entity();
