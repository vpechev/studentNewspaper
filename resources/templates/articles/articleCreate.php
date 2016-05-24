<?php
    include_once "../../php/models/category.php";
?>

<script>
    $( document ).ready(function() {
        $("#submit-btn").click(function(){
            var data = {
                title : $("#title").val(), 
                text : $("#text").val(),
                category : $("#category option:selected").val(),
            };
            callAjax("Router", "create", "post", "articles", data);
        });
    });
</script>

<div>
    <div>
        <label for="title">Име</label>
        <input id="title" type="text"/>
    </div>
    
    <div>
        <label for="category">Категория</label>
        <select id="category">
            <?php $category = new Category();
                echo '<option value="">Изберете категория</option>';  
                foreach($category->getCategoriesList() as $key)
                    echo '<option value="'.$key[0].'">'. $key[1] .'</option>';
            ?>
        </select>
    </div>
    
    <div>
        <label for="text">Статия</label>
        <textarea id="text" cols="150" rows="50"> </textarea>
    </div>
    
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>