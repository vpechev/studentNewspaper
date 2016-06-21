<script>
    function download(filename, text) {
        var element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
        element.setAttribute('download', filename);

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        document.body.removeChild(element);
    }
    
    function getCurrentDate(){
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!

        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 
        return yyyy+'-' + mm +'-' + dd;
    }
    
    $(document).ready(function() {
        var data = { 
            id : $("#element-id").val(),
            title : '' + $("#title").text(), 
            text : '' + $("#text").text(), 
            likesCount : $("#likes-field").text(), 
            dislikesCount : '' + $("#dislikes-field").text(), 
            title : '' + $("#title").text(), 
            publishDate : '' + $('#publishDate'),
            category : '' + $('#category').attr('value'),
            userId : '' + 5
        };
                
        $('#like-btn').click(function(){
            callAjax2("Router", "like", "post", "articles", data);
            var likesField = $("#likes-field");
            likesField.text(parseInt(likesField.text()) + 1);
            $('#like-btn').prop('disabled', 'disabled');
            $('#dislike-btn').prop('disabled', 'disabled');
        });
        
        $("#dislike-btn").click(function(){
            callAjax2("Router", "dislike", "post", "articles", data);
            var dislikesField = $("#dislikes-field");
            dislikesField.text(parseInt(dislikesField.text()) + 1);
            $('#dislike-btn').prop('disabled', 'disabled');
            $('#like-btn').prop('disabled', 'disabled');
        });
        
        $("#update-btn").click(function(){
            callAjax("Router", "updateRedirect", "post", "articles", data);
        });
        
        $("#delete-btn").click(function(){
            callAjax("Router", "delete", "post", "articles", data);
        });
        
        $("#download-btn").click(function(){
            var filename = $("#title").text() + '.txt',
                text = $("#text").text();
            download(filename, text);
        });
        
        $("#download-xml-btn").click(function(){
            var articleTitle = $("#title").text(),
                filename = articleTitle + '.xml',
                text = $("#text").text(),
                authorUsername = $("#author").text(),
                xmlStructure = '\<\?xml version="1.0"\?\><article><title>' + articleTitle + '</title><author>' + authorUsername +'</author><text>' + text + '</text></article>'; 
                
            download(filename, xmlStructure);
        });
        
        $("#add-comment-btn").click(function(){
            var data = {
                        articleId : $("#element-id").val(),
                        text : $.trim( $("#comment-field").val() ) 
                       };
                
            if(data.text.length > 0) {
                callAjax2("Router", "create", "post", "comments", data);
                $("#comments-container")
                    .children(".comment:last")
                    .after('<table class="comment table alert-success">'
                            + '<tr>'
                                + '<th>' + getCurrentDate() + '</th>'
                                + '<th>' + <?php echo json_encode($_SESSION['username']); ?>+ ' </th>'
                            + '</tr>' 
                            + '<tr><td colspan="2">' + data.text + '<td></div>'
                      + '</table>')

                $("#comment-field").val("");
            }
        });
    });
    
</script>
<h1 class="page-header">Детайли</h1>
<div>
    <input id="element-id" hidden value="<?php echo $data["article"]->getId()?>"/>
</div>
<div>
   <label>Заглавие</label>
   <div id="title"><?php echo $data["article"]->getTitle()?></div>
</div>
<div>
   <label>Автор</label>
   <div id="author"><?php echo $data["article"]->getAuthor()->getUsername();?></div>
</div>

<div style="float:left; width:80%">
   <label>Статия</label>
   <div id="text" ><?php echo $data["article"]->getText()?></div>
</div>
<div style="display:inline-block; margin-left:2%;">
<div class="row">
   <div class="col-md-1"><img src="resources/pics/thumbs_up.png" style=" width:50px ;height:50px;margin:0;"/></div>
   <div id="likes-field"  class="col-md-1"><?php echo $data["article"]->getLikesCount()?></div>
</div>
<div class="row">
   <div class="col-md-1"><img src="resources/pics/thumbs_down.png" style=" width:50px ;height:50px;margin:0;"/></div>
   <div id="dislikes-field" class="col-md-1"><?php echo $data["article"]->getDislikesCount()?></div>
</div>
</div>
<div>
   <label>Дата на публикуване</label>
   <div id="publishDate"><?php echo date("Y-m-d", strtotime($data["article"]->getPublishDate())); ?></div>
</div>
<div>
   <label>Категория</label>
   <div id="category" value="<?php echo $data["article"]->getCategoryEntry()[0]?>"><?php echo $data["article"]->getCategoryEntry()[1]?></div>
</div>
<div>
    <button id="like-btn" class="btn btn-large btn-success">Харесвам</button>
    <button id="dislike-btn" class="btn btn-large btn-danger">Не харесвам</button>
    <?php if($_SESSION['user-id'] == $data["article"]->getAuthor()->getId()) {?> 
        <button id="update-btn" class="btn btn-large btn-warning">Редактирай</button>
        <button id="delete-btn" class="btn btn-large btn-default">Изтрий</button>
    <?php } ?>
    <button id="download-btn" class="btn btn-large btn-success">Изтегли</button>
    <button id="download-xml-btn" class="btn btn-large btn-success">Изтегли XML</button>
</div>
<div>
   <label>Коментари</label>
   <div id="comments-container">
        <?php foreach($data["article"]->getComments() as $comment)
                echo '<table class="comment table alert-success">'
                            . '<tr>'
                                . '<th>' .date("Y-m-d", strtotime($comment->getPublishDate())) . '</th>'
                                . '<th>' . $comment->getAuthor() -> getUsername() . '</th>'
                            . '</tr>' 
                            . '<tr><td colspan="2">' .$comment->getText() . '<td></div>'
                      .'</table>';
        ?>
   </div>
   <div>
       <textarea id="comment-field" class="comment-field" rows="5" colls="500">
       </textarea>
       <button id="add-comment-btn" class="btn btn-large btn-success">Добави</button>
   </div>
</div>