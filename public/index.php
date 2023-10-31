<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Bakkerij</title>
</head>

<body>
    
    <?php
    // Making database connection
    require_once('../source/classes/db.php');
    $connectionDB = new Database("mariadb", "Bakery", "milou", "createApi");
    $connectionDB->connect();
    // Loading the header
    require('./../source/views/layouts/header.php');

    $url = explode('/', trim($_SERVER['REQUEST_URI']));
    $url = array_values(array_filter($url));
    // When there is no products it loads the list page
    if (empty($url[1])) {
        require('./../source/views/layouts/product.php');
    }
    // When there is a product it loads the detail page
    if (!empty($url[1])) {
        // Making an constant variable to get access everywhere to the product slug (using it in my detail page)
        define('PRODUCT_SLUG', htmlspecialchars($url[1]));
        require('./../source/views/layouts/detail.php');
    }

    require('./../source/views/layouts/footer.php');
    ?>
</body>

</html>