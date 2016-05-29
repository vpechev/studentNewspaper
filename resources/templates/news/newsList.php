<script>
    $(document).ready(function() {
        $("#add-new").click(function(){
            callAjax("Router", "createRedirect", "post", "news");
        });
        
        $(".deletable").click(function(event){
            var data = {
                id : event.target.id
            };

            callAjax("Router", "delete", "post", "news", data);
        });
        
        $(".updatable").click(function(event){
            var elementChildren = $(event.target).parents().eq(1).children();
            var data = {
                id : event.target.id,
                text : elementChildren.eq(1).text(),
                date : elementChildren.eq(2).text()
            };

            callAjax("Router", "updateRedirect", "post", "news", data);
        });
        
        $("#delete-all").click(function(event){
            callAjax("Router", "deleteAll", "post", "news");
        });
    });
</script>

<h1>Новини</h1>
<div>
    <button id="add-new" class="btn btn-large btn-success" >Създай нов</button>
    <button id="delete-all" class="btn btn-large btn-success">Изтрий всички</button>  
</div>
<table class="table">
    <thead>
      <tr>
        <th>Номер</th>
        <th>Съдържание</th>
        <th>Дата</th>
        <th>Редакция</th>
        <th>Изтриване</th>
      </tr>
    </thead>
    <?php $counter = 1; ?>
    <?php foreach ($data["newsList"] as $el) {?>
        <tr>
            <td> <?php echo $counter++; ?> </td>
            <td> <?php echo $el->getText(); ?> </td>
            <td> <?php echo date('Y-m-d', strtotime($el->getPublishDate())); ?> </td>
            <td> <button id="<?php echo $el->getId(); ?>" class="updatable btn btn-large btn-warning">Редактирай</button></td>
            <td> <button id="<?php echo $el->getId(); ?>" class="deletable btn btn-large btn-danger">Изтрий</button></td>
        </tr>        
        <?php } ?>
</table>
