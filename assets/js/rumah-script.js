document.addEventListener('DOMContentLoaded', function(){
    // Logo Bar Queue
    window.addEventListener('scroll', function(){
        var logobar = document.querySelector(".logobar");
        if(window.scrollY > 0){
            logobar.classList.add("appear");
        }else{
            logobar.classList.remove("appear");
        }
    });

    // Scroll Progress Bar
    window.addEventListener('scroll', function() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("scrollbar").style.height = scrolled + "%";
    });

    // Initialize Bootstrap carousel
    var rumahCarousel = new bootstrap.Carousel(document.getElementById('RumahCarousel'), {
        pause: false
    });

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