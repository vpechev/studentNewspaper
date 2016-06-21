<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-left: -6%;
    margin-bottom: 2%;

}

li {

}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 2% 3%;
    text-decoration: none;
}

a:hover:not(.active) {
    background-color: #111;
}

.active {
   background-color:#4CAF50;
}

#video-nav-title { 
    background-color: rgba(124, 109, 187, 0.65);
    color: #ffffff;
    font-weight: bold;
    text-align: center;
    font-size: 1em;

}
</style>

<script>
    function changeVideo(elementId, iframeSrc){
        $("#" + elementId).click(function(){
            $(".video-option-li").removeClass("active");
            $("#video-iframe").attr("src", decodeURIComponent(iframeSrc));
            $("#" + elementId).parent().addClass("active");
        });

         $('#add-video-btn').click(function(){
            var data = {
                        label : $.trim( $('#label').val() ), 
                        url : $.trim( encodeURIComponent($('#url').val()) )
                       };
                
            if(data.label.length > 0 && data.url.length > 0) {

                callAjax2('Router', 'create', 'post', 'videos', data);

                $('#video-nav')
                    .children('.video-option-li:last')
                    .after('<li class="video-option-li"><a id="'
                                + data.label 
                                + '" href="#">'
                                + data.label
                                + '</a></li>'
                          );

                $('#label').val('');
                $('#url').val('');
            }

            changeVideo(data.label, data.url);
        });
    }
    
    $( document ).ready(function() {
        <?php
            foreach ($data["videosList"]  as $video) {
                echo 'changeVideo(' . json_encode($video->getLabel()) . ',' . json_encode($video->getUrl()) . ');';
            }
        ?>
        // changeVideo("HTML", echo "");
        // changeVideo("css", "https://www.youtube.com/embed/ozW7b3yHiaw");
        // changeVideo("javascript", "https://www.youtube.com/embed/eyvr78c7O0I");
        // changeVideo("mysql", "https://www.youtube.com/embed/4IC900dix-o");
        // changeVideo("php", "https://www.youtube.com/embed/E9-l6Mbx-Vs?list=PLF4lVL1sPDSlQkQOz4FYO7kCSJACl5CbA");
        // changeVideo("angular", "https://www.youtube.com/embed/pFH-6b0dNGQ?list=PLF4lVL1sPDSnvKV5AedV0W47R6GCSfy0Y");
        // changeVideo("nodejs", "https://www.youtube.com/embed/kqhTrYr0lOw");

    });
</script>

<div id="add-videos-section">
    <h2>Добави видео урок</h2>
    <label for="label">Име</label>
    <input id="label" type="text" />
    <div id="mobile-break">
    <label for="url">Линк</label>
    <input id="url" type="text" />
    </div>
    <button id="add-video-btn" class="btn btn-large btn-success">Добави</button>
   </div>

<div>
    <h2>Видео уроци</h2>
    <div class="col col-md-2"> 
        <ul id="video-nav" style="border-radius:10px">
            <li id="video-nav-title">Видео уроци за начинаещи</li>
            <?php
                foreach ($data["videosList"]  as $video) {
                    echo '<li class="video-option-li"><a id="'. $video->getLabel() . '" href="#">'. $video->getLabel() . '</a></li>';
                }
            ?>
            
        </ul>
    </div>

    <div class="col col-md-10">
        <iframe id="video-iframe" width="854" height="480" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

