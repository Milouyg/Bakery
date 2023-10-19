<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Bakkerij</title>
</head>
    <!-- Hier tonen we product.php op het scherm -->
<body>
    <?php require_once('../source/classes/db.php');
        $connectionDB = new Database("mariadb", "Bakery", "milou", "createApi");
        $connectionDB->connect();
    ?>
    <?php require('./../source/views/layouts/header.php')?>
    <?php require_once('./../source/views/layouts/detail.php')?>
    <?php require('./../source/views/layouts/footer.php')?>
</body>
</html>