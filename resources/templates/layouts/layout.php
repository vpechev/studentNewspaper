<html>
<head>
    <?php
        include 'resources/templates/includes.php';
    ?>
    
    <title><?= $data['title']; ?></title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        //include $data['header'];
        include "resources/templates/header.php";
        include "resources/templates/navigation.php";
    ?>
    <div id="main-container">
        <?php
            include $data['content'];
        ?>
    </div>
    <?php
        include "resources/templates/footer.php";
    ?>
</body>
</html>
    