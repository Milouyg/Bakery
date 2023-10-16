<!-- Hier maken we de database verbinding aan
Ook roepen we de getProducts functie aan -->

<?php require_once("../source/classes/db.php");
$connectionDB = new Database("mariadb", "Bakery", "milou", "createApi");
$connectionDB->connect();
$products = $connectionDB->getProducts();
?>

<section>
    <h1 class="title">Bakkerij</h1>
</section>