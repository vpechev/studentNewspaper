<script>
    $( document ).ready(function() {
        $("#submit-btn").click(function(){
            var data = {
                id : $("#element-id").val(),
                title : $("#title").val(),
                text : $("#text").val(),
                date : $("#date").val()
            };
            callAjax("Router", "update", "post", "articles", data);
        });
debugger;
        $("#element-id").val('<?php echo $data["id"]; ?>');
        $("#title").val('<?php echo $data["title"]; ?>');
        $("#text").val( "<?php echo (string)$data["text"]; ?>");
        $("#date").val('<?php echo date('Y-m-d', strtotime($data["date"]));?>'); 
    });
</script>

<div>
    <div>
        <input id="element-id" hidden />
        
        <label for="title">Заглавие</label>
        <input id="title" type="text"/>
        
        <label for="text">Новина</label>
        <textarea id="text" cols="100" rows="10"></textarea>
        
        <label for="date">Дата на създаване</label>
        <input id="date" type="date"/>
    </div>
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>