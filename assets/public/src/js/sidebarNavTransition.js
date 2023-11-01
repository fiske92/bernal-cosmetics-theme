(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const navItems = document.querySelectorAll('#menu-sidebar-menu li.menu-item-has-children');

        if (navItems) {
            for (let i = 0; i < navItems.length; i++) {
                navItems[i].addEventListener('mouseover', openSubMenu);
                navItems[i].addEventListener('mouseout', closeSubMenu);
            }
        }

        function openSubMenu(e) {
            const subMenu = e.target.closest('.menu-item-has-children').querySelector('.sub-menu');

            e.target.closest('.menu-item-has-children').classList.add('active');
            subMenu.style.height = subMenu.scrollHeight + 'px';
        }

        function closeSubMenu(e) {
            const subMenu = e.target.closest('.menu-item-has-children').querySelector('.sub-menu');

            e.target.closest('.menu-item-has-children').classList.remove('active');
            subMenu.style.height = 0;
        }
    })
})()