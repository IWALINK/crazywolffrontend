<!-- /#wrapper -->

<!-- cusor -->
<div class="tf-mouse tf-mouse-outer"></div>
<div class="tf-mouse tf-mouse-inner"></div>

<!-- go top button -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
        </path>
    </svg>
</div>

<!-- Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/swiper.js"></script>
<script src="assets/js/map.min.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/countto.js"></script>
<script src="assets/js/nouislider.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- Simple Fullscreen Bootstrap Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width: 95%; width: 95%; margin: 1rem auto;">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 15px; right: 25px; z-index: 1051; font-size: 3rem; color: #000; opacity: 0.8;">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body p-0 d-flex align-items-center justify-content-center" style="height: 100%;">

                <!-- Desktop View (Hidden on mobile) -->
                <div class="container-fluid h-100 d-none d-md-flex">
                    <div class="row no-gutters">
                        <!-- Thumbnails Column -->
                        <div class="col-2 d-flex flex-column align-items-center justify-content-around" style="background-color: #fff; padding: 15px 0; overflow-y: scroll; max-height: 100vh;" id="desktopThumbnails">
                            <!-- Thumbnails will be loaded dynamically -->
                        </div>
                        <!-- Main Image Column -->
                        <div class="col-10 d-flex align-items-center justify-content-center">
                            <img src="" id="mainMenuImage" alt="Menu" style="max-width: 100%; max-height: 90vh; object-fit: contain;">
                        </div>
                    </div>
                </div>

                <!-- Mobile Carousel (Hidden on desktop) -->
                <div id="menuCarousel" class="carousel slide d-md-none">
                    <div class="carousel-inner" id="mobileCarouselInner">
                        <!-- Carousel items will be loaded dynamically -->
                    </div>
                    <a class="carousel-control-prev" href="#menuCarousel" role="button" data-slide="prev" style="background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; margin: auto 15px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#menuCarousel" role="button" data-slide="next" style="background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; margin: auto 15px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let menuImages = [];
    let currentImageIndex = 0;
    
    // Load menu images when modal is shown
    $('#menuModal').on('show.bs.modal', function() {
        loadMenuImages();
    });

    function loadMenuImages() {
        // Show loading state with spinner
        document.getElementById('desktopThumbnails').innerHTML = `
            <div class="text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Chargement...</span>
                </div>
                <p class="mt-2">Chargement des menus...</p>
            </div>
        `;
        document.getElementById('mobileCarouselInner').innerHTML = `
            <div class="text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Chargement...</span>
                </div>
                <p class="mt-2">Chargement des menus...</p>
            </div>
        `;

        fetch('https://backend.crazywolf-lausanne.com/api/menu-images')
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success && data.data && data.data.length > 0) {
                    menuImages = data.data;
                    renderMenuImages();
                } else {
                    showErrorMessage('Aucune image de menu disponible pour le moment');
                }
            })
            .catch(error => {
                console.error('Error loading menu images:', error);
                if (error.message.includes('Failed to fetch')) {
                    showErrorMessage('Impossible de se connecter au serveur. Vérifiez votre connexion internet.');
                } else {
                    showErrorMessage('Erreur lors du chargement des images de menu. Veuillez réessayer.');
                }
            });
    }

    function renderMenuImages() {
        if (menuImages.length === 0) return;

        // Render desktop thumbnails
        const desktopThumbnails = document.getElementById('desktopThumbnails');
        desktopThumbnails.innerHTML = '';
        
        menuImages.forEach((image, index) => {
            const thumbnail = document.createElement('img');
            // Use the correct field name from your API response
            const imageUrl = image.image_of_menu;
            thumbnail.src = imageUrl;
            thumbnail.className = 'img-fluid menu-thumbnail';
            thumbnail.alt = `Menu ${index + 1}`;
            thumbnail.style.cursor = 'pointer';
            thumbnail.style.marginBottom = '15px';
            thumbnail.style.padding = '3px';
            thumbnail.style.border = '3px solid transparent';
            thumbnail.style.maxWidth = '40%';
            thumbnail.style.transition = 'border-color 0.3s ease';
            
            if (index === 0) {
                thumbnail.style.borderColor = '#000';
            }
            
            thumbnail.addEventListener('click', () => {
                setActiveImage(index);
            });
            
            desktopThumbnails.appendChild(thumbnail);
        });

        // Render mobile carousel
        const mobileCarouselInner = document.getElementById('mobileCarouselInner');
        mobileCarouselInner.innerHTML = '';
        
        menuImages.forEach((image, index) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
            
            const carouselImage = document.createElement('img');
            // Use the correct field name from your API response
            const imageUrl = image.image_of_menu;
            carouselImage.src = imageUrl;
            carouselImage.className = 'd-block w-100';
            carouselImage.style.objectFit = 'contain';
            carouselImage.alt = `Menu ${index + 1}`;
            
            carouselItem.appendChild(carouselImage);
            mobileCarouselInner.appendChild(carouselItem);
        });

        // Set initial main image
        setActiveImage(0);
    }

    function setActiveImage(index) {
        if (index < 0 || index >= menuImages.length) return;
        
        currentImageIndex = index;
        const image = menuImages[index];
        
        // Update main image
        const mainImage = document.getElementById('mainMenuImage');
        // Use the correct field name from your API response
        const imageUrl = image.image_of_menu;
        mainImage.src = imageUrl;
        mainImage.alt = `Menu ${index + 1}`;
        
        // Update thumbnail active state
        const thumbnails = document.querySelectorAll('.menu-thumbnail');
        thumbnails.forEach((thumb, thumbIndex) => {
            if (thumbIndex === index) {
                thumb.style.borderColor = '#000';
            } else {
                thumb.style.borderColor = 'transparent';
            }
        });
        
        // Update mobile carousel
        const carouselItems = document.querySelectorAll('#mobileCarouselInner .carousel-item');
        carouselItems.forEach((item, itemIndex) => {
            if (itemIndex === index) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    function showErrorMessage(message) {
        document.getElementById('desktopThumbnails').innerHTML = `
            <div class="text-center p-4">
                <div class="alert alert-warning" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p class="mb-0">${message}</p>
                </div>
            </div>
        `;
        document.getElementById('mobileCarouselInner').innerHTML = `
            <div class="text-center p-4">
                <div class="alert alert-warning" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p class="mb-0">${message}</p>
                </div>
            </div>
        `;
    }

    // Add keyboard navigation for desktop
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('menuModal').classList.contains('show')) {
            if (e.key === 'ArrowLeft') {
                const newIndex = currentImageIndex > 0 ? currentImageIndex - 1 : menuImages.length - 1;
                setActiveImage(newIndex);
            } else if (e.key === 'ArrowRight') {
                const newIndex = currentImageIndex < menuImages.length - 1 ? currentImageIndex + 1 : 0;
                setActiveImage(newIndex);
            }
        }
    });
});
</script>

</body>

</html>