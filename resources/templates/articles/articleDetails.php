<script>
    $(document).ready(function() {
        var data = { id : $("#element-id").val() };
                
        $("#like-btn").click(function(){
            debugger;
                callAjax("Router", "like", "post", "articles", data);
                // var likesField = $("#likes-field");
                // likesField.text(likesField.text() + 1);
        });
        
        $("#dislike-btn").click(function(){
                callAjax("Router", "dislike", "post", "articles", data);
                // var dislikesField = $("#dislikes-field");
                // dislikesField.text(dislikesField.text() + 1);
        });
        
        $("#update-btn").click(function(){
                callAjax("Router", "update", "post", "articles", data);
        });
        
        $("#delete-btn").click(function(){
                callAjax("Router", "delete", "post", "articles", data);
        });
    });
</script>
<h1>Детайли</h1>
<div>
    <input id="element-id" hidden />
</div>
<div>
   <label>Заглавие</label>
   <div><?php echo $data["article"]->getTitle()?></div>
</div>
<div>
   <label>Лайкове</label>
   <div id="likes-field"><?php echo $data["article"]->getLikesCount()?></div>
</div>
<div>
   <label>Не-Лайкове</label>
   <div id="dislikes-field"><?php echo $data["article"]->getDislikesCount()?></div>
</div>
<div>
   <label>Статия</label>
   <div><?php echo $data["article"]->getText()?></div>
</div>
<div>
   <label>Дата на публикуване</label>
   <div><?php echo $data["article"]->getPublishDate()?></div>
</div>
<div>
   <label>Категория</label>
   <div><?php echo $data["article"]->getCategoryEntry()[1]?></div>
</div>
<div>
    <button id="like-btn" class="btn btn-large btn-success">Харесвам</button>
    <button id="dislike-btn" class="btn btn-large btn-danger">Не харесвам</button>
    <button id="update-btn" class="btn btn-large btn-warning">Редактирай</button>
    <button id="delete-btn" class="btn btn-large btn-default">Изтрий</button>
</div>
<div>
   <label>Коментари</label>
   <div><?php echo $data["article"]->getComments()?></div>
   <div>
       <textarea rows="5" colls="100">
       </textarea>
       <button id="add-comment-btn" class="btn btn-large btn-success">Добави</button>
   </div>
</div>