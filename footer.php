    <?php 
    $instagram = get_field('instagram', 'option');
    $facebook = get_field('facebook', 'option'); 
    ?>
    
    <footer class="site-footer" id="footer">
        <div class="container">
            <div class="bg-dark text-light rounded-b-3xl">
                <div class="text-center section-pad px-6 md:px-12 lg:w-2/5 lg:mx-auto">
                    <h2 class="uppercase font-serif text-xl">On reste en contact</h2>
                    <p class="mt-12">Renseignez votre adresse mail si vous souhaitez être tenu informé de l’ouverture de notre boutique et de notre actualité.</p>
                    <div class="my-12">
                        <?= do_shortcode('[forminator_form id="63"]'); ?>
                        <p class="text-xs opacity-50 mt-2">En validant, vous acceptez de recevoir des emails de la part de Wearth Lab.</p>    
                    </div>
                    <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-wearth-lab-light.svg" alt="Logo Wearth Lab - Shopping responsable">
                </div>
                <div class="flex justify-center pb-6 text-center lg:justify-start lg:pb-8 lg:pl-8 lg:-mt-12">
                    <a href="<?= $instagram; ?>" class="inline-block hover:opacity-75" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/icon-instagram-light.svg" alt="Icone Instagram" width="17"></a>
                    <a href="<?= $facebook; ?>" class="inline-block ml-4 hover:opacity-75" target="_blank"><img src="<?= get_template_directory_uri() ?>/img/icon-facebook-light.svg" alt="Icone facebook" width="7"></a>
                </div>
            </div>
            <!-- Mentions -->
            <div class="text-xs text-center py-2 md:flex md:justify-between md:py-6">
                <p>Wearth Lab. © 2021. Tous droits réservés.</p>
                <p>Site par <a href="https://bemy.studio" target="_blank"><img class="inline-block logo-bemy" width="47" src="<?= get_template_directory_uri(  ); ?>/img/logo-bemy.svg" alt="Logo Bemy - Studio de création à Nantes et Barcelone"></a></p>
            </div>
        </div>
    </footer>

    <div class="cursor" :class="{link: cursorLink, drag: cursorDrag}"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>