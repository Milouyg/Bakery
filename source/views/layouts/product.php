<!-- Hier maken we de database verbinding aan
Ook roepen we de getProducts functie aan -->
<?php echo getcwd() ?>

<?php $products = $connectionDB->getProducts(); ?>
<section class="section-product">
    <?php foreach ($products as $product) : ?>
        <a href="./detail.php?id=<?php echo $product['id'];?>">
            <article class="product">
                <h1 class="product-name"><?php echo $product['title'];?></h1>
                <figure class="container-img">
                    <img class="product-img" src="./imgs/<?php echo $product['img']; ?>" alt="Afbeelding img">
                </figure>
                <p class="product-intro"><?php echo $product['intro']; ?></p>
            </article>
        </a>
    <?php endforeach; ?>
</section>