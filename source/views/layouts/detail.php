<?php
// In dit document halen we alle gegevens 
// van de database op en ga ik de detail product 
// pagina maken

// Getting the product_slug from the index.php
$product = $connectionDB->getProduct(PRODUCT_SLUG);
?>

<section class="detail-page">
    <article>
        <h1 class="detail-h1"><?php echo $product['title']; ?></h1>
        <p><?php echo $product['description']; ?></p>
        <ul>
            <li><?php echo $product['ingrediënts']; ?></li>
        </ul>
        <img src="./imgs/<?php echo $product['img'];?>" alt="">
    </article>
</section>