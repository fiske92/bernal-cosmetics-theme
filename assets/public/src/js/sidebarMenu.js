(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelector('#menu-sidebar-menu li.menu-item-has-children');

        if (menuItems) {
            for (let i = 0; i < menuItems.length; i++) {
                menuItems[i].addEventListener('click', e => {
                    toggleActiveClass(e, item);
                });
            }
    
            function toggleActiveClass(e, element) {
                const subMenu = e.target.querySelector('.sub-menu');
    
                element.classList.toggle('active');
                subMenu.style.height = subMenu.scrollHeight + 'px';
            }
        }
    })
})()