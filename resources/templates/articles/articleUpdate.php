<script>
    $( document ).ready(function() {
        $("#submit-btn").click(function(){
            var data = {
                id : $("#element-id").val(),
                title : $("#title").val(),
                text : $("#text").val(),
                date : $("#date").val(),
                category : $('#category option:selected').val()
            };
            callAjax("Router", "update", "post", "articles", data);
        });
        
        $("#element-id").val('<?php echo $data["id"]; ?>');
        $("#title").val('<?php echo $data["title"]; ?>');
        $("#text").val( "<?php echo (string)$data["text"]; ?>");
        $("#date").val('<?php echo date('Y-m-d', strtotime($data["date"]));?>');
        
        $.each($('#category').children(), function(key, value){
           var val = $(value);
           if(val.text() == '<?php echo $data["category"][1] ?>'){
               val.prop("selected", "selected")
               return false;
           }
            
        });
    });
</script>

<div>
    <div>
        <input id="element-id" hidden />
        
        <div>
            <label for="title">Заглавие</label>
            <input id="title" type="text"/>
        </div>
        
        <div>
            <label for="text">Новина</label>
            <textarea id="text" cols="100" rows="10"></textarea>
        </div>
        <div>
            <label for="date">Дата на създаване</label>
            <input id="date" type="date"/>
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
    </div>
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>