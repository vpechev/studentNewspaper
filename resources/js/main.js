function callAjax(controller, action, type, pageTo, data) {
    $.ajax({ url: 'resources/php/controllers/'+controller+'.php',
            data: 
                {
                    action: action,
                    pageTo: pageTo,
                    data : data
                },
            type: type,
            success: function(output) {
                $("#main-container").html(output);
            }
            });
}