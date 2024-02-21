<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Tam Phuong</title>
        <link rel="icon" href="/img/logo.jpg">
        <link rel="stylesheet" href="codeMainCSS/setbook.css" type="text/css">
        <link rel="stylesheet" href="codeMainCSS/login.css" type="text/css">
        <link rel="stylesheet" href="codeMainCSS/style.css" type="text/css">
        <link rel="stylesheet" href="codeMainCSS/style_book.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="main">
            <?php
            session_start();
                include("web_mysqli/admin/config/config.php");
                include("elements/header.php");
                include("elements/main.php");         
                include("elements/footer.php");
            ?>
        </div>
        <script src="js/toBook.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>