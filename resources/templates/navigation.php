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
            callAjax("Router", "getAll", "post", "videos");
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

<script>
function showMenu(){
  if(document.getElementById("show").checked){
    document.getElementById("main-navigation").style.display="block";
  }
  else{
    document.getElementById("main-navigation").style.display="none";

  }
}
</script>

<script>
function hideMenu(){
    if($(window).width()<=800){
    document.getElementById("main-navigation").style.display="none";
}
}
 </script>

<script>
var amountScrolled = 300;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('a.back-to-top').fadeIn('slow');
    } else {
        $('a.back-to-top').fadeOut('slow');
    }
});
</script>

<nav>
<!--mobile menu-->
    <label for="show" class="show-menu">Меню</label>
    <input type="checkbox" id="show" onchange= "showMenu()">
    <div id="main-navigation" class="navigation">
        <ul class="nav">
            <li  onclick="hideMenu()"> <span id="home-link">Начало</span> </li>
            <li  onclick="hideMenu()"> <span id="news-link">Новини</span> </li>
            <li  onclick="hideMenu()"> <span id="users-link">Потребители</span> </li>
            <li  onclick="hideMenu()"> <span id="articles-link">Статии</span> </li>           
            <li  onclick="hideMenu()"> <span id="videos-link">Видео</span></li>
            <li  onclick="hideMenu()"> <span id="about-fmi-link">ФМИ</span></li>
            <li  onclick="hideMenu()"> <span id="photos-link">Снимки</span></li>
            <li  onclick="hideMenu()"> <span id="contacts-link">Контакти </span></li>
            <li  onclick="hideMenu()"> <span id="logout-link">Изход </span></li>
        </ul>
    </div>
</nav>

