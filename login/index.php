<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Tam Phuong</title>
        <link rel="icon" href="/img/logo.jpg">
        <link rel="stylesheet" href="../codeMainCSS/admin.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
    <?php
        session_start();
                    include("../web_mysqli/admin/config/config.php");
                    include("modul/modulmain/header.php");
                    include("modul/modulmain/main.php");
                    include("modul/modulmain/footer.php");
    ?>
    </body>
</html>