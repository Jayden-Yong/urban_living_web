<?php
    $page_name = "Rumah Universiti";
    include('assets/page-elements/head.php');
    include('assets/page-elements/progress-bar.php');
    include('assets/page-elements/roomcard-elements.php');
    include('assets/page-elements/gallery-modals.php');
?>

<!-- LOGO BAR -->
<header class="logobar stigma d-flex align-items-center">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
            <div>
                <span class="logo-title">Rumah Universiti</span>
            </div>
            <div>
                <span style="font-size: 1.5em;">by</span>
            </div>
            <div>
                <img src="assets/Images/urbanLogo.png">
            </div>
        </div>
    </div>
</header>

<!-- CAROUSEL BANNER -->
<section> 
    <div class="rumah-banner">
        <div id="RumahCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/Images/rumah/rumah-cover.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/rumah/room-view2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/rumah/living.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/rumah/deluxe-queen.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/rumah/deluxe-quad.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/Images/rumah/lounge.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="headbar text-center align-items-center">
            <span class="banner-brand">Rumah Universiti</span>
            <span class="banner-subtitle">by URBAN LIVING</span>
            <div><span class="line-70"></span></div>
        </div>
        <div class="banner-text dancing-script-light">
            <span>Lodging Enhanced</span>
        </div>
        <div class="brands d-none d-lg-block"><span class="line-70"></span></div>
    </div>
</section>

<section class="r-section">
    <div class="container">
        <div class="d-flex align-items-center">
            <span class="dancing-script-light cfs-2">A bliss for minimalism</span> 
            <span class="title-line"></span>
        </div>
        <span class="stigma d-block display-2">Aesthetic Rooms</span>
    </div>

    <div class="container mt-3 mt-lg-5">
        <!-- Deluxe Queen -->
        <div class="d-lg-flex align-items-center gap-5">
            <div class="ru-room">
                <img src="assets/Images/rumah/deluxe-queen.jpg">
            </div>

            <div class="ru-desc mt-3 mt-lg-0">
                <span class="stigma display-1">Deluxe Queen</span>
                <div class="row">
                    <?php
                        bedLabel("1");
                        personLabel("2");
                    ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">Appliances</span>
                <div class="row playfair-semib">
                    <?php feature('ac_unit','Air conditioner') ?>
                    <?php feature('dresser','Wardrobe closet') ?>
                    <?php feature('tv','Television') ?>
                    <?php feature('desk','Desk and chair') ?>
                    <?php feature('floor_lamp','Bedside lamp') ?>
                    <?php feature('water_heater','Water heater') ?>
                    <?php feature('self_care','Hair dryer') ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">Services</span>
                <div class="row playfair-semib">
                    <?php feature('health_and_beauty','Amenities included') ?>
                    <?php feature('wifi','WiFi in all rooms') ?>
                    <?php feature('water_drop','Water dispenser') ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">The Balcony</span>
                <span class="playfair-semib cfs-5">
                    Every room at Rumah Universiti has a balcony of their own which are easily accessible for guests. 
                    Bask in the sunlight as you wake up from a good night's rest and admire the spectacular view of 
                    a varsity known as Universiti Malaya. 
                </span>
            </div>
        </div>

        <!-- Deluxe Quad -->
        <div class="d-lg-flex align-items-center gap-5 mt-5">
            <div class="ru-room">
                <img src="assets/Images/rumah/deluxe-quad.jpg">
            </div>

            <div class="ru-desc mt-3 mt-lg-0">
                <span class="stigma display-1">Deluxe Quad</span>
                <div class="row">
                    <?php
                        bedLabel("2");
                        personLabel("4");
                    ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">Appliances</span>
                <div class="row playfair-semib">
                    <?php feature('ac_unit','Air conditioner') ?>
                    <?php feature('dresser','Wardrobe closet') ?>
                    <?php feature('tv','Television') ?>
                    <?php feature('desk','Desk and chair') ?>
                    <?php feature('floor_lamp','Bedside lamp') ?>
                    <?php feature('water_heater','Water heater') ?>
                    <?php feature('self_care','Hair dryer') ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">Services</span>
                <div class="row playfair-semib">
                    <?php feature('health_and_beauty','Amenities included') ?>
                    <?php feature('wifi','WiFi in all rooms') ?>
                    <?php feature('water_drop','Water dispenser') ?>
                </div>
                <span class="d-block stigma display-6 mt-3 mb-2">The Living Room</span>
                <span class="playfair-semib cfs-5">
                    Have a small space all to yourself with privacy in mind exclusively in our Deluxe Quad rooms.
                    Grab a cup of coffee and start a quiet reading session or have a seat with family and friends
                    and chat away in the living room.
                </span>
            </div>
        </div>
    </div>
</section>

<section class="r-section" style="background: var(--theme-1);">
    <div class="container">
        <div class="d-flex align-items-center">
            <span class="dancing-script-light cfs-2">A peek at our</span> 
            <span class="title-line"></span>
        </div>
        <span class="stigma d-block display-2">Gallery</span>
    </div>

    <div class="container mt-3 mt-lg-4 mb-lg-5">
        <div class="row row-cols-lg-3 row-cols-1">
            <div class="gallery-item">
                <div class="ru-gallery">
                    <img src="assets/Images/rumah/living.jpg">
                </div>
                <span class="d-block text-center text-lg-start mt-2 stigma display-6">The Living Room</p>
            </div>
            <div class="gallery-item">
                <div class="ru-gallery">
                    <img src="assets/Images/rumah/lounge.jpg">
                </div>
                <span class="d-block text-center text-lg-start mt-2 stigma display-6">The Lounge</p>
            </div>
            <div class="gallery-item">
                <div class="ru-gallery">
                    <img src="assets/Images/rumah/room-view2.jpg">
                </div>
                <span class="d-block text-center text-lg-start mt-2 stigma display-6">The Deluxe Quad</p>
            </div>
        </div>
    </div>
</section>

<section class="r-section">
    <div class="container">
        <div class="d-flex align-items-center">
            <span class="dancing-script-light cfs-2">Find us on the</span> 
            <span class="title-line"></span>
        </div>
        <span class="stigma d-block display-2">Map</span>
    </div>

    <div class="container mt-3 mt-lg-4">
        <div class="d-lg-flex align-items-center gap-5">
            <iframe class="map-frame" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKfCJhjFJzDERoZiD7HoazIU&key=AIzaSyAhDLCZoq9iq9MZhfCm8GAmt7kHLnP1JmY"></iframe>

            <div class="ru-desc mt-3 mt-lg-0">
                <span class="stigma display-1" style="color: var(--malaya-blue);">Rumah Universiti</span>
                <div class="d-flex align-items-center gap-4 mt-3">
                    <span class="material-symbols-outlined cfs-1" style="color: var(--secondary-color);">location_on</span>
                    <span class="poppins-medium cfs-5">Rumah Universiti, KL 1107 Dewan Tunku Canselor UM, Lingkungan Budi, 50603, Federal Territory of Kuala Lumpur</span>
                </div>
                <div class="d-flex align-items-center gap-4 mt-3">
                    <span class="material-symbols-outlined cfs-1" style="color: var(--secondary-color);">mail</span>
                    <a href="mailto:info@urbanliving.com.my" class="poppins-medium cfs-5">info@urbanliving.com.my</a>
                </div>
                <div class="d-flex align-items-center gap-4 mt-3">
                    <span class="material-symbols-outlined cfs-1" style="color: var(--secondary-color);">call</span>
                    <span class="poppins-medium cfs-5">+603 7932 6300</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="r-section" style="background: var(--theme-1);">
    <div class="container text-center">

        <span class="stigma display-3" style="color: var(--malaya-blue);">Rumah Universiti</span>

        <div class="d-flex justify-content-center align-items-center gap-3">
            <span class="stigma cfs-3">by</span>
            <img src="assets/Images/urbanLogo.png" style="height: 1em;">
        </div>

        <span class="d-block mt-4 poppins-medium cfs-6">&copy; All rights reserved</span>

    </div>
</section>