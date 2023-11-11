(() => {
    window.addEventListener('load', () => {
        const videoUrl = document.querySelector('#product-video') 
            ? document.querySelector('#product-video').value
            : '';
        const productVideoContainer = document.querySelector('.product-video');
        const closeVideoBtn = document.querySelector('.close-video');
        let thumbnailGallery = document.querySelector('ol.flex-control-nav');

        if (videoUrl) {
            createVideoElement();
            appendProductGallery();
        }

        function appendProductGallery() {
            if (!thumbnailGallery) {
                const ol = document.createElement('ol');
                ol.className = 'flex-control-nav flex-control-thumbs mt-3';
    
                thumbnailGallery = ol;
                document.querySelector('.woocommerce-product-gallery').append(thumbnailGallery);
            }

            const videoElement = document.createElement('video');
            const li = document.createElement('li');
            li.className = 'custom-thumbnail-img';
            li.addEventListener('click', () => toggleVideo(productVideoContainer));
            
            videoElement.setAttribute('src', videoUrl);
            videoElement.className = 'w-100';
            
            closeVideoBtn.addEventListener('click', () => toggleVideo(productVideoContainer));

            li.appendChild(videoElement);
            thumbnailGallery.append(li);
        }

        function createVideoElement() {
            const videoContainer = document.getElementById('product-video__video');

            let videoHTML = `<video controls="true" class="big-video">
                <source type="video/mp4" src="${videoUrl}">
                </video>`

            videoContainer.innerHTML = videoHTML;
        }

        function toggleVideo(container) {
            if (!container.classList.contains('invisible')) {
                container.querySelector('video').pause();
            }
            container.classList.toggle('invisible');
            container.classList.toggle('opacity-0');
        }
    })
})();