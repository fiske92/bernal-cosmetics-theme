(() => {
    window.addEventListener('DOMContentLoaded', () => {
        const closeBeforeHeaderBtn = document.querySelector('.close-before-header');
        const beforeHeaderDiv = document.querySelector('.nav-subscribe-form');
        const submitBtn = document.querySelector('.nav-subscribe-form .wpcf7-submit')
        const beforeNavOpenSubscribeBtn = document.querySelector('.before-nav__subscribe-btn');

        let isBeforeHeaderOpened = false;
        
        closeBeforeHeaderBtn.addEventListener('click', toggleBeforeHeader);
        beforeNavOpenSubscribeBtn.addEventListener('click', toggleBeforeHeader);
        submitBtn.addEventListener('click', setBeforeHeaderHeight);
        
        function toggleBeforeHeader(e) {
            if (isBeforeHeaderOpened && e.target.classList.contains('close-before-header')) {
                beforeHeaderDiv.style.height = 0;
                beforeHeaderDiv.classList.remove('show');
                isBeforeHeaderOpened = false;
            } else if (!isBeforeHeaderOpened && e.target.classList.contains('before-nav__subscribe-btn')) {
                beforeHeaderDiv.style.height = beforeHeaderDiv.scrollHeight + 'px';
                beforeHeaderDiv.style.height = beforeHeaderDiv.scrollHeight + 'px';
                beforeHeaderDiv.classList.add('show');
                isBeforeHeaderOpened = true;
            }
        }

        function setBeforeHeaderHeight() {
            beforeHeaderDiv.style.height = 'auto';
        }
    })
})();