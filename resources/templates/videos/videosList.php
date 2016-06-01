<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-left: -80px;

}

li {
    
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

a:hover:not(.active) {
    background-color: #111;
}

.active {
   background-color:#4CAF50;
}

#video-nav-title { 
    background-color: lightblue;
    color: #333;
    font-weight: bold;
    text-align: center;
    font-size: 15px;
}
</style>

<script>
    function changeVideo(elementId, iframeSrc){
        $("#" + elementId).click(function(){
            $(".video-option-li").removeClass("active");
            $("#video-iframe").attr("src", iframeSrc);
            $("#" + elementId).parent().addClass("active");
        });
    }
    
    $( document ).ready(function() {
        changeVideo("html", "https://www.youtube.com/embed/HFG6q5-McFk");
        changeVideo("css", "https://www.youtube.com/embed/ozW7b3yHiaw");
        changeVideo("javascript", "https://www.youtube.com/embed/eyvr78c7O0I");
        changeVideo("mysql", "https://www.youtube.com/embed/4IC900dix-o");
        changeVideo("php", "https://www.youtube.com/embed/E9-l6Mbx-Vs?list=PLF4lVL1sPDSlQkQOz4FYO7kCSJACl5CbA");
        changeVideo("angular", "https://www.youtube.com/embed/pFH-6b0dNGQ?list=PLF4lVL1sPDSnvKV5AedV0W47R6GCSfy0Y");
        changeVideo("nodejs", "https://www.youtube.com/embed/kqhTrYr0lOw");
    });
</script>

<div class="col col-md-2"> 
    <ul>
        <li id="video-nav-title">Видео уроци за начинаещи</li>
        <li class="video-option-li"><a id="html" href="#">HTML</a></li>
        <li class="video-option-li"><a id="css" href="#">CSS</a></li>
        <li class="video-option-li"><a id="javascript" href="#">Javascript</a></li>
        <li class="video-option-li"><a id="mysql" href="#">MySQL</a></li>
        <li class="video-option-li"><a id="php" href="#">PHP</a></li>
        <li class="video-option-li"><a id="angular" href="#">Angular</a></li>
        <li class="video-option-li"><a id="nodejs" href="#">NodeJs</a></li>
    </ul>
</div>

<div class="col col-md-10">
    <iframe id="video-iframe" width="854" height="480" src="" frameborder="0" allowfullscreen></iframe>
</div>

