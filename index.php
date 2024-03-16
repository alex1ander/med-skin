<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="script.js"></script>

</head>
<body id="admin-panel">
    <div class="container-fluid mx-auto mt40">
        <div class="row mx-auto justify-content-around">

            <div id="sidebar-adm" class="sidebar col-xl-2 col-12">
                <? include 'sidebar.php';?>
            </div>

            <div class="main-block col-xl-10 col-12">
                <?php
                
                switch ($_SERVER['REQUEST_URI']) {
                    case '/':
                        include 'catalog.php';
                        break;
                    case '/zakaz':
                        include 'zakaz.php';
                        break;
                    case '/zakaz-info':
                        include 'zakaz-info.php';
                        break;
                    case '/contragent':
                        include 'contragent.php';
                        break;
                    case '/contragent-add':
                        include 'contragent-add.php';
                        break;
                    case '/user':
                        include 'user.php';
                        break;
                    case '/user-add':
                        include 'user-add.php';
                        break;
                    case '/settings':
                        include 'settings.php';
                        break;
                    default:
                        include '404.php';
                        break;
                }
                 
                 ?>
            </div>
        </div>
    </div>
</body>
</html>