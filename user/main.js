    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;
    const itemsPerSwitch = 3;

    function updateCarousel() {
        document.getElementById('carousel-list').style.transform = `translateX(${-currentIndex * (100 / itemsPerSwitch)}%)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % (totalItems - itemsPerSwitch + 1);
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % (totalItems - itemsPerSwitch + 1);
        updateCarousel();
    }

    // Automatic sliding
    setInterval(() => {
        nextSlide();
    }, 5000); // Change slide every 5 seconds

    // Pop-up Functions
    document.addEventListener('DOMContentLoaded', function () {
        // Show the popup after a delay (e.g., 5 seconds)
        setTimeout(showPopup, 3000);
    });

    function showPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
    
