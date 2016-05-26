<html>
<head>
    <!--<title><?= $data['title']; ?></title>-->
    <meta charset="UTF-8">
</head>
<body>
    <?php  
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'header.php';
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'navigation.php';
    ?>
    
    <!--container for the changing content-->
    <div id="main-container" class="container">
        <?php include_once __DIR__ . DIRECTORY_SEPARATOR.'..' . DIRECTORY_SEPARATOR.'..' . DIRECTORY_SEPARATOR . "php/auth.php"; ?> 
    </div>  

    <?php include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'footer.php'; ?>
</body>
</html>
    