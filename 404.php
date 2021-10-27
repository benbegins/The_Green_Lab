<?php 

    get_header(); 
    $crowdfunding = get_field('crowdfunding', 'option');
    $instagram = get_field('instagram', 'option');
    $facebook = get_field('facebook', 'option');
?>

    <div class="error">

        <section class="section-pad min-h-screen flex items-center">
            <div class="container text-center">
                <h1 class="text-2xl font-serif font-bold">Page introuvable</h1>
                <p class="text-lg mt-4 mb-12">Désolé, cette page n'existe pas ou a été déplacée.</p>
                <a href="<?= get_site_url(); ?>" class="btn-primary">Retour à l'accueil</a>
            </div>
        </section>

    </div>
   

<?php get_footer(); ?>