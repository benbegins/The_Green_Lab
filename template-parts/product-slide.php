<div class="homepage__produits__img-container">
    <?php the_post_thumbnail('medium_large', ['class' => 'visuel-produit']); ?>

    <!-- Icones produits -->
    <!-- <?php 
        $icones_produit = get_the_terms($post->ID, 'icone');
        if($icones_produit):
    ?>
    <div class="gradient-overlay"></div>
    <ul class="homepage__produits__list-icones">
        <?php
        foreach ($icones_produit as $icone):
            $name = $icone->name;
            $visuel = get_field('visuel', 'icone_' . $icone->term_id);
        ?>
        <li class="mt-2">
            <img src="<?= $visuel['url']; ?>" alt="<?= 'icone ' . $name; ?>" width="24" height="24">
        </li>

        <?php endforeach; ?>    
    </ul>
    <?php endif; ?> -->
    <!-- Fin icones -->

</div>
<!-- <p class="mt-4 text-sm text-green"><?php the_field('nom_de_la_marque'); ?></p> -->
<h4 class="font-semibold uppercase mt-4"><?php the_title(); ?></h4>
<!-- <p><?php the_field('prix'); ?> €</p> -->

    
