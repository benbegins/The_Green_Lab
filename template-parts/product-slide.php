<div class="homepage__produits__img-container">
    <?php the_post_thumbnail('medium_large'); ?>
</div>
<p class="mt-4 text-sm text-green"><?php the_field('nom_de_la_marque'); ?></p>
<h4 class="font-semibold uppercase"><?php the_title(); ?></h4>
<p><?php the_field('prix'); ?> €</p>   