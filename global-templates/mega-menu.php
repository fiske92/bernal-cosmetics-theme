<div class="mega-menu py-4 bg-content" tabIndex='-1'>
    <div class="ast-container mega-menu__container">
            <div class="me-5 featured-product">
                <a href="<?php echo get_site_url() . '/product-category/bc-one' ?>">
                    <p class="fw-bold text-primary">BC One</p>
                    <div class="image-container">
                        <img src="<?php echo CHILD_THEME_URL . '/assets/public/dist/img/bc-one.jpg'; ?>" 
                            alt="Lak"
                            class="rounded">
                    </div>
                    <h5 class="text-center text-primary my-3">BC One Sve U Jednom Gel</h5>
                </a>
            </div>

            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'mega-menu-location',
                    'container' => 'nav',
                    'container_class' => 'menu-class',
                ));
            ?>
            <img 
                src="<?php echo CHILD_THEME_URL . '/assets/public/dist/img/nokti-draw.png' ?>" 
                alt="Ilustracija Noktiju" 
                class="mega-menu__container__ilustracija"
            >
    </div>
</div>