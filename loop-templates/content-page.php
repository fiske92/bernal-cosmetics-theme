<section class="bernal-col pt-0">
    <div class="ast-container">
        <div class="bernal-hero d-flex flex-column flex-md-row py-3 p-sm-0">
            <div class="bernal-hero__left w-100 align-self-center">
                <h2>Bernal <span class="text-primary">Cosmetics</span> - Gde lepota postaje umetnost</h2>
                <p>Uđite u svet boja, sjaja i nege za nokte, stvoren da istakne vašu autentičnost i unikatan stil.  Istaknite svoj stil sa našim vrhunskim lakovima i akrigelovima, jer lepota počinje sa svakim slojem.</p>
                <a href="<?php echo get_permalink(wc_get_page_id('shop')) ?>" class="btn btn-primary px-5 mt-3">Shop</a>
            </div>
            <div class="bernal-hero__right d-flex justify-content-center align-items-center w-100 gap-3 h-100 py-3">
                <div class="rounded-pill w-100 h-75" style="background: url('<?php echo get_the_post_thumbnail_url() ?>') center/cover"></div>
                <div class="rounded-pill w-100 h-100" style="background: url('<?php echo get_field('second_featured_image')['url'] ?>') center/cover"></div>
                <div class="rounded-pill w-100 h-75" style="background: url('<?php echo get_field('third_featured_image')['url'] ?>') center/cover"></div>
            </div>
        </div>
    </div>
</section>
<?php 
    the_content();
?>