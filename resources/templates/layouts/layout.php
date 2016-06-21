<!DOCTYPE html>
<html>
<head>
    <!--<title><?= $data['title']; ?></title>-->
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php  
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'header.php';
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'navigation.php';
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'banners'.DIRECTORY_SEPARATOR.'leftBanner.php';
    ?>
    
    <!--container for the changing content-->
    <div id="main-container" class="col col-md-8">
        <?php include_once __DIR__ . DIRECTORY_SEPARATOR.'..' . DIRECTORY_SEPARATOR.'..' . DIRECTORY_SEPARATOR . "php/auth.php"; ?> 
    </div>  

    <?php
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'banners'.DIRECTORY_SEPARATOR.'rightBanner.php';
        include_once __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'footer.php'; 
    ?>
</body>
</html>
    