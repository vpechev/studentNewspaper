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
        
        $("#upload-btn").change(function(){
            var fileDisplayArea = document.getElementById('text');

                var file = document.getElementById('upload-btn').files[0];
                var textType = /text.*/;

                if (file.type.match(textType)) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        fileDisplayArea.innerText = reader.result;
                    }

                    reader.readAsText(file);	
                } else {
                    fileDisplayArea.innerText = "File not supported!";
                }
        });
    });
</script>

<h1 class="page-header"> Създаване на Статия</h1>
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
        <input id="upload-btn" type="file">
        <label for="text">Статия</label>
        <textarea id="text" cols="150" rows="50"> </textarea>
    </div>
    
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>