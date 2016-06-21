<script>
    $(document).ready(function() {
        $('#submit-btn').click(function(){
        var data = {
            username : $.trim($('#username').val()),
            password : calcMD5($.trim($('#password').val())),
        };
        
        callAjax("Router", "", "post", "login", data); 
        });
    });
</script>

<div class="col col-md-6">
    <h2 class="page-header">Вход</h2>
    <div>
        <label for="username">Потребителско име</label>
        <input id="username" type="text" class="form-control" name="username" />
    </div>
    <div>
        <label for="password">Парола</label>
        <input id="password" type="password" class="form-control" name="password" />
    </div>
    <div> <button id="submit-btn" class="btn btn-lg btn-success btn-block">Вход</button> </div>
</div>