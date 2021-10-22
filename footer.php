    <footer class="site-footer" id="footer">
        <div class="container">
            <div class="bg-dark text-light rounded-b-3xl section-pad">
                <div class="text-center px-6 md:px-12 lg:w-2/5 lg:mx-auto">
                    <h2 class="uppercase font-serif text-xl">On reste en contact</h2>
                    <p class="mt-12">Renseignez votre adresse mail si vous souhaitez être tenu informé de l’ouverture de notre boutique et de notre actualité.</p>
                    <div class="my-12">
                        <?= do_shortcode('[forminator_form id="63"]'); ?>
                        <p class="text-xs opacity-50 mt-2">En validant, vous acceptez de recevoir des emails de la part de The Green Lab.</p>    
                    </div>
                    <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/the-green-lab-logo-circle.svg" alt="Logo The Green Lab - Shopping responsable">
                </div>
            </div>
            <!-- Mentions -->
            <div class="text-xs text-center py-2 md:flex md:justify-between md:py-4">
                <p>The Green Lab. © 2021. Tous droits réservés.</p>
                <p>Site par <a href="https://bemy.studio" target="_blank"><img class="inline-block logo-bemy" width="47" src="<?= get_template_directory_uri(  ); ?>/img/logo-bemy.svg" alt="Logo Bemy - Studio de création à Nantes et Barcelone"></a></p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>