<script>
    $(document).ready(function() {
        $("#add-new").click(function(){
            callAjax("Router", "createRedirect", "post", "articles");
        });
        
        $(".deletable").click(function(event){
            var data = {
                id : event.target.id
            };

            callAjax("Router", "delete", "post", "articles", data);
        });
        
        $(".gotoable").click(function(event){
            var data = {
                id : event.target.id
            };

            callAjax("Router", "details", "post", "articles", data);
        });
        
        $(".updatable").click(function(event){
            debugger;
            var elementChildren = $(event.target).parents().eq(1).children();
            var data = {
                id : event.target.id
            };

            callAjax("Router", "updateRedirect", "post", "articles", data);
        });
        
        $("#delete-all").click(function(event){
            callAjax("Router", "deleteAll", "post", "articles");
        });
    });
</script>

<h1>Статии</h1>
<div>
    <button id="add-new" class="btn btn-large btn-success" >Създай нов</button>
    <button id="delete-all" class="btn btn-large btn-success">Изтрий всички</button>  
</div>
<table class="table">
    <thead>
      <tr>
        <th>Номер</th>
        <th>Заглавие</th>
        <th>Дата</th>
        <th>Рейтинг</th>
        <th>Редакция</th>
        <th>Изтриване</th>
        <th>Към статията</th>
      </tr>
    </thead>
    <?php $counter = 1; ?>
    <?php foreach ($data["articlesList"] as $el) {?>
        <tr>
            <td> <?php echo $counter++; ?> </td>
            <td> <?php echo $el->getTitle(); ?> </td>
            <td> <?php echo date('Y-m-d', strtotime($el->getPublishDate())); ?> </td>
            <td> <?php echo $el->getRating(); ?> </td>
            <td> <button id="<?php echo $el->getId(); ?>" class="updatable btn btn-large btn-warning">Редактирай</button></td>
            <td> <button id="<?php echo $el->getId(); ?>" class="deletable btn btn-large btn-danger">Изтрий</button></td>
            <td> <button id="<?php echo $el->getId(); ?>" class="gotoable btn btn-large btn-default">Към статията</button></td>
        </tr>        
        <?php } ?>
</table>
