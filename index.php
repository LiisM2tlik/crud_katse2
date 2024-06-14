<?PHP include_once('config/mysqli.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Minu JavaScriptid -->
    <script src="js/my_scripts.js" type="text/javascript"></script>

    <title>CRUD MySQLi avaleht</title>
</head>

<body>
    <!-- MENÜÜ -->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php require_once 'menu.php'; ?>
            </div>
        </div>
    </div>

    <!-- Siin toimub autmaatne sisu lugemine -->
    <div class="container">
        <?php 
            if (isset($_GET['category'])) {
                switch ((int)$_GET['category']) {
                    case 1:
                        include_once 'create.php';
                        break;
                    case 2: 
                        include_once 'read.php';
                        break;
                    case 3: 
                        include_once 'update.php';
                        break;
                    case 4: 
                        include_once 'delete.php';
                        break;
                    case 5:
                        include_once 'homepage.php';
                        break;
                    case 7:
                        include_once 'hw_update.php';
                        break;
                    case 8:
                        include_once 'hw_delete.php';
                        break;
                    case 9:
                        include_once 'hw-update-by-id.php';
                        break;
                    default:
                    include_once 'homepage.php';
                    break;
                }

            }
            else {
                include_once 'homepage.php';
            }
        ?>
    </div>
</body>

</html>