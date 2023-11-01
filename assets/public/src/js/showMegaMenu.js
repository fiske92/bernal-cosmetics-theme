(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const allCategoryNavBtn = document.querySelector('.all-category');
        const mobileAllCategoryNavBtn = document.querySelector('.mobile-all-category');
        const megaMenu = document.getElementsByClassName('mega-menu')[0];
        const headerNav = document.querySelector('header.site-header');
        const megaMenuMobileItem = document.querySelectorAll('#menu-mega-menu > li > a');
        const isMobileDevice = window.innerWidth < 768 ? true : false;
        const content = document.getElementById('content');


        let isMenuOpened = false;

        // Listeners
        allCategoryNavBtn.addEventListener('click', openAndCloseMegaMenu);
        megaMenu.addEventListener('blur', closeMegaMenu);
        mobileAllCategoryNavBtn.addEventListener('touchstart', openAndCloseMegaMenu);

        if (isMobileDevice) {
            for (let btn of megaMenuMobileItem) {
                btn.parentElement.querySelector('.sub-menu').append(createSubmenuCloseBtn());

                btn.addEventListener('click', (e) => {
                    e.preventDefault();

                    e.target.parentElement.querySelector('.sub-menu').style.marginLeft = 0;
                })
            }
        }

        // Functions
        function openAndCloseMegaMenu(e) {
            e.preventDefault();

            if (!isMenuOpened) {
                isMenuOpened = true;

                megaMenu.classList.add('show');
                megaMenu.style.height = megaMenu.scrollHeight + 20 + 'px';
                allCategoryNavBtn.classList.add('show');
                headerNav.style.position = 'relative';
                content.style.filter = 'blur(7px)';

                setTimeout(() => {
                    megaMenu.focus();
                }, 500);
            } else {
                isMenuOpened = false;

                megaMenu.classList.remove('show');
                allCategoryNavBtn.classList.remove('show');
                megaMenu.style.height = 0;
                content.style.filter = 'blur(0px)';
                
                setTimeout(() => {
                    headerNav.style.position = 'sticky';
                }, 100);
            }
        }

        function closeMegaMenu(e){
            megaMenu.classList.remove('show');
            allCategoryNavBtn.classList.remove('show');
            content.style.filter = 'blur(0px)';

            setTimeout(() => {
                isMenuOpened = false;
            }, 100);
        }

        function createSubmenuCloseBtn() {
            const span = document.createElement('span');
            span.innerText = 'Nazad';
            span.classList = 'close-sub-menu';
            span.addEventListener('touchstart', e => {
                e.target.closest('.sub-menu').style.marginLeft = '-120%';
            })

            return span;
        }
    })
})();