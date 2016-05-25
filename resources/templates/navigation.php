<?php
?>

<script>
    $( document ).ready(function() {
        $("#home-link").click(function(){
            location.reload();
        });
        $("#news-link").click(function(){
            callAjax("Router", "getAll", "post", "news");
        });
        
        $("#articles-link").click(function(){
            callAjax("Router", "getAll", "post", "articles");
        });
        
        $("#home-link").click(function(){
            callAjax("Router", "", "post", "home");
        });
        
        $("#users-link").click(function(){
            callAjax("Router", "", "post", "users");
        });
        
        $("#contacts-link").click(function(){
            callAjax("Router", "", "post", "contacts");
        });
        
        $("#logout-link").click(function(){
            callAjax("Router", "", "post", "contacts");
        });      
    });
</script>

<nav>
    <div id="main-navigation" class="navigation">
        <ul class="nav">
            <li> <span id="home-link">Начало</span> </li>
            <li> <span id="news-link">Новини</span> </li>
            <li> <span id="users-link">Потребители</span> </li>
            <li> <span id="articles-link">Статии</span> </li>           
            <li> <span id="contacts-link">Контакти </span></li>
            <li> <span id="contacts-link">Изход </span></li>
        </ul>
    </div>
</nav>