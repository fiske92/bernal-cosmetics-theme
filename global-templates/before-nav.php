<?php if ($enableAboveNavSection): ?>

<div class="nav-subscribe-form position-relative bg-light-1">
    <div class="ast-container py-3">
        <h2 class="text-center text-primary mb-2"><?php esc_html_e($aboveNavTitle); ?></h2>
        <p class="text-center text-dark-1"><?php esc_html_e($belowTitleText); ?></p>
        <?php echo do_shortcode($subscribeFormShortcode); ?>
    </div>
    <div class="x close-before-header"></div>
</div>
<div class="bg-primary before-nav">
    <div class="ast-container d-flex justify-content-between align-items-center">
        <div class="text-white fs-7 fw-bold d-flex py-2 py-sm-0 justify-content-center flex-wrap text-center text-md-start before-nav__text">
            <a href="tel:+381691117282" class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                0691117282
            </a>
            <a href="mailto:bernalcosmeticsserbia@gmail.com" class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
                bernalcosmeticsserbia@gmail.com
            </a>
            <a href="https://www.instagram.com/bernalcosmeticsserbia" class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
                @bernallcosmeticsserbia
            </a>  
        </div>
        <span class="text-white subscribe-btn p-2 fs-7 fw-bold before-nav__subscribe-btn d-none d-md-flex align-items-center fs-7">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>
            Pretplati se
        </span>
    </div>
</div>

<?php endif; ?>

<div class="header-search-form">
    <p class="fs-2 d-block d-md-none text-center brand mb-0">ŠPANSKI BRAND</p>
    <div class="ast-container d-flex justify-content-around align-items-center py-md-2 py-0">
        <a href="<?php echo esc_url(bloginfo('url')) ?>" class="header-search-form__logo">
            <img src="<?php echo esc_url($logo_url) ?>" alt="" width="150" height="150">
        </a>
        <p class="fs-2 d-none d-md-block ms-5 mb-0 brand">ŠPANSKI BRAND</p>
        <div class="header-search-form__form flex-grow-1 px-md-5 px-2">
            <form 
                role="search" 
                method="get" 
                id="searchform" 
                action="<?php echo esc_url(home_url('/')); ?>"
                class="d-flex rounded border-primary border"
            >
                <input type="text" value="" name="s" id="s" placeholder="Pretrazi..." class="rounded-start w-100"/>
                <select class="d-none d-lg-inline">
                    <option value="sve" selected>Izaberi kategoriju</option>
                    <option value="lakovi">Lakovi</option>
                    <option value="ruber_baze">Ruber baze</option>
                    <option value="gelovi">Gelovi</option>
                </select>
                <button type="submit" id="searchsubmit" class="p-0 px-2 rounded-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                        <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                        <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                    </svg> 
                </button>
            </form>
        </div>
        <div class="header-search-form__login pe-5 d-none d-md-flex flex-column align-items-center fw-bold">
            <span class="text-primary">Prijava / Registracija</span>
            <a href="#" class="text-primary">Nalog</a>
        </div>
        <div class="header-search-form__cart-btn ps-md-5 ps-2 fw-bold">
            <a href="<?php echo esc_url($cartPageURL); ?>" class="d-flex align-items-center">
                <div class="header-search-form__cart-btn__svg" data-count-items="<?php echo $cartCount; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="#651294" class="bi bi-bag-heart me-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                    </svg>
                </div>
                <span class="d-none d-lg-inline text-primary">Cart</span>
            </a>
        </div>
    </div>
</div>


