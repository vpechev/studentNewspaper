<?php
?>

<script>
    $( document ).ready(function() {
        $("#home-link").click(function(){
            //location.reload();
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

        $("#videos-link").click(function(){
            callAjax("Router", "", "post", "videos");
        });        

        $("#contacts-link").click(function(){
            callAjax("Router", "", "post", "contacts");
        });
        
        $("#logout-link").click(function(){
            callAjax("Router", "", "post", "logout");
        });      
        
        $('#about-fmi-link').click(function(){
            callAjax("Router", "", "post", "fmi-about");
        });
        
         $('#photos-link').click(function(){
            callAjax("Router", "", "post", "photos");
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
            <li> <span id="videos-link">Клипове</span></li>
            <li> <span id="about-fmi-link">ФМИ</span></li>
            <li> <span id="photos-link">Снимки</span></li>
            <li> <span id="contacts-link">Контакти </span></li>
            <li> <span id="logout-link">Изход </span></li>
        </ul>
    </div>
</nav>