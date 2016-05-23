<script>
    $( document ).ready(function() {
        $("#add-new").click(function(){
            callAjax("Router", "createRedirect", "post", "news");
        });
    });
</script>

<?php
    function updateCurrent($id){
        
    }
    
    function deleteCurrent($id){
        echo "delete".$id;
    }
?>

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
            <td> <?php echo $el->getPublishDate(); ?> </td>
            <td> <button id="update-current" class="btn btn-large btn-warning" onclick="<?php updateCurrent($el->getId()); ?>">Редактирай</button></td>
            <td> <button id="update-current" class="btn btn-large btn-danger" onclick="<?php deleteCurrent($el->getId()); ?>">Изтрий</button></td>
        </tr>        
        <?php } ?>
</table>