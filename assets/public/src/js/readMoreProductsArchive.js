(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const readMoreBtn = document.querySelector('body.tax-product_cat button.read-more');
        const descriptionContainer = document.querySelector('header.woocommerce-products-header');

        if (readMoreBtn && descriptionContainer) {
            readMoreBtn.addEventListener('click', expandArchiveDescription);
        }

        function expandArchiveDescription(e) {
            if (e.target.innerText !== 'Prikaži manje') {
                descriptionContainer.style.height = descriptionContainer.scrollHeight +  'px';
                descriptionContainer.classList.add('active');
                e.target.innerText = 'Prikaži manje';
            } else {
                const height = window.innerWidth < 576 ? '100px' : '170px';
                descriptionContainer.classList.remove('active');
                descriptionContainer.style.height = height;
                e.target.innerText = 'Prikaži više';
            }

        }
    })
})()