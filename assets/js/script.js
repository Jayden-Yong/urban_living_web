document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('solid');
        } else {
            navbar.classList.remove('solid');
        }
    });

    window.addEventListener('scroll', function() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("scrollbar").style.height = scrolled + "%";
    });

    // Initialize Bootstrap carousel
    var heroCarousel = new bootstrap.Carousel(document.getElementById('HeroCarousel'), {
        pause: false
    });

    var foodCarousel = new bootstrap.Carousel(document.getElementById('FoodCarousel'));

    // Toggle room description visibility
    var roomFrames = document.querySelectorAll('.room-frame');
    roomFrames.forEach(function(roomFrame) {
        var roomCard = roomFrame.closest('.room-card');
        var roomDesc = roomCard.querySelector('.room-desc');
        if (roomDesc) {
            roomFrame.addEventListener('click', function() {
                roomDesc.style.display = (roomDesc.style.display === 'none' || roomDesc.style.display === '') ? 'block' : 'none';
            });
        }
    });
});