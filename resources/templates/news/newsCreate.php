<script>
    $( document ).ready(function() {
        $("#submit-btn").click(function(){
            var data = {
                text : $("#text").val()
            };
            callAjax("Router", "create", "post", "news", data);
        });
    });
</script>

<div>
    <div>
        <label for="text">Новина</label>
        <textarea id="text" cols="100" rows="10"> </textarea>
    </div>
    <div>
        <button id="submit-btn" class="btn btn-large btn-success">Създай</button>
    </div>
</div>