(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const burgerToggleBtn = document.querySelector('.menu-toggle.main-header-menu-toggle');
        const burgerMenuContainer = document.querySelector('.ast-mobile-header-content');
        const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');

        if (burgerToggleBtn) {
            const clonedButton = burgerToggleBtn.cloneNode(true);
            clonedButton.classList = 'menu-toggle ast-mobile-menu-trigger-minimal d-flex align-items-center justify-content-center';
            burgerToggleBtn.parentNode.replaceChild(clonedButton, burgerToggleBtn);

            clonedButton.addEventListener('click', showBurgerMenu);
        }

        function showBurgerMenu() {
            clonedButton.classList.toggle('toggled');
            burgerMenuContainer.classList.toggle('active');
            document.body.classList.toggle('offcanvas-backdrop-active');
            offcanvasBackdrop.classList.toggle('active');
        }
    })
})();