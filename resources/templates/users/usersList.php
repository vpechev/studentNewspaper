<h1>Потребители</h1>
<div>
    <table class="table">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Потребителско име</th>
        </tr>
        </thead>
        <?php $counter = 1; ?>
        <?php foreach ($data["usersList"] as $el) {?>
            <tr>
                <td> <?php echo $counter++; ?> </td>
                <td> <?php echo $el->getUsername(); ?> </td>
            </tr>        
            <?php } ?>
    </table>
</div>