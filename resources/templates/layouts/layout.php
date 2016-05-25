<html>
<head>
    <!--<title><?= $data['title']; ?></title>-->
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include_once "resources/templates/header.php";
        include_once "resources/templates/navigation.php";
    ?>
    
    <!--container for the changing content-->
    <div id="main-container" class="container">
        <?php include_once "resources/php/auth.php"; ?> 
    </div>  

    <?php include_once "resources/templates/footer.php"; ?>
</body>
</html>
    