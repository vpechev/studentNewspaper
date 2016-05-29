<script>
    $( document ).ready(function() {
        $("#submit-btn").click(function(){
            var data = {
                id : $("#element-id").val(),
                text : $("#text").val(),
                date : $("#date").val()
            };
            callAjax("Router", "update", "post", "news", data);
        });

        $("#element-id").val('<?php echo $data["id"]; ?>');
        $("#text").val( "<?php echo (string)$data["text"]; ?>");
        $("#date").val('<?php echo date('Y-m-d', strtotime($data["date"]));?>');    
    });
</script>

<div>
    <div>
        <input id="element-id" hidden />
        
        <div>
            <label for="text">Новина</label>
            <textarea id="text" cols="100" rows="10"></textarea>
        </div>
        <div>
            <label for="date">Дата на създаване</label>
            <input id="date" type="date"/>
        </div>
    </div>
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>