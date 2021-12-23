<!-- NEWSLETTER -->
<section class="newsletter" :class="{active: newsletterActive}">
    <div class="container">
        <div class="text-center px-6 md:px-12 lg:w-2/5 lg:mx-auto">
            <h2 class="uppercase font-serif text-xl">Newsletter</h2>
            <p class="mt-12 text-sm">Renseignez votre adresse mail si vous souhaitez être tenu informé de l’ouverture de notre boutique et de notre actualité.</p>
            <div class="my-12">
                <?= do_shortcode('[forminator_form id="63"]'); ?>
                <p class="text-xs opacity-50 mt-2">En validant, vous acceptez de recevoir des emails de la part de Wearth Lab.</p>    
            </div>
        </div>
    </div>
    <button class="btn-close" @click="newsletterActive = false">Retour au site</button>
</section>