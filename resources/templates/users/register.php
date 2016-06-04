<script>
    $(document).ready(function() {
        $('#reg-submit-btn').click(function(){
            debugger;
            var username = $.trim($('#reg-username').val()),
                password = $.trim($('#reg-password').val()),
                rePassword = $.trim($('#reg-re-password').val());
            if(username.length === 0){
                $('#reg-msg')
                    .addClass('text-danger')
                    .text('Въведете потребителско име');
                return;
            }    
            if(password === rePassword){
                var passhash = calcMD5(password);
                var data = {
                    username : username,
                    password : passhash,
                };
                
                callAjax("Router", "", "post", "register", data); 
            } else {
                $('#reg-msg')
                    .addClass('text-danger')
                    .text('Паролите не съвпадат');
                return;
            }
        });
        
    }); 
</script>

<div class="col col-md-6">
    <h2 class="page-header">Регистрация</h2>
    <div>
        <label for="reg-username">Потребителско име</label>
        <input id="reg-username" type="text" name="reg-username" class="form-control"/>
    </div>
    <div>
        <label for="reg-password">Парола</label>
        <input id="reg-password" type="password" name="reg-password" class="form-control"/>
    </div>
    <div>
        <label for="reg-re-password">Парола</label>
        <input id="reg-re-password" type="password" name="reg-re-password" class="form-control"/>
    </div>
    <div>
        <div id="reg-msg"></div>
        <button id="reg-submit-btn" class="btn btn-lg btn-primary btn-block">Регистрирай</button>
    </div>
</div>