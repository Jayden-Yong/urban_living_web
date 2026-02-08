<?php
    $page_name = "Urban Living";
    include('assets/page-elements/head.php');
    include('assets/page-elements/progress-bar.php');
    include('assets/page-elements/navbar.php');
    include('assets/page-elements/roomcard-elements.php');
    include('assets/page-elements/placecard-elements.php');
    include('assets/page-elements/gallery-modals.php')
?>

<!-- HERO BANNER -->
<section class="w-100">
    <div id="HeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/Images/The-Vacation-Haven-min.png" class="d-block w-100">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">The</span>
                        <span class="d-block playfair-reg-italic display-2">Vacation Haven</span>
                        <p class="playfair-reg h4">Kick back and recharge in style</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Images/A-Place-to-Remember-min.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">A Place to</span>
                        <span class="d-block playfair-reg-italic display-2">Remember</span>
                        <p class="playfair-reg h4">Get a peace of mind in a minimalistic suite</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Images/Minimalist-Bliss-min.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">Unmistakably</span>
                        <span class="d-block playfair-reg-italic display-2">Minimalist Bliss</span>
                        <p class="playfair-reg h4">Designs that speak your mind</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Images/pokok_22022022.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">The acclaimed</span>
                        <span class="d-block playfair-reg-italic display-2">Pokok KL</span>
                        <p class="playfair-reg h4">Your local delicacies with an added twist</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Images/pool.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">Have a splash at</span>
                        <span class="d-block playfair-reg-italic display-2">The Pool</span>
                        <p class="playfair-reg h4">Unwind in serenity</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Images/wedding_22022022.png" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="text-start">
                        <span class="playfair-reg-italic h3">Intimate weddings with</span>
                        <span class="d-block playfair-reg-italic display-2">Brick House Group</span>
                        <p class="playfair-reg h4">Create dazzling memories for precious moments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section text-center playfair-reg" data-aos="fade-up" data-aos-duration="800">
    <div class="d-flex align-items-center justify-content-center">
        <div class="line"></div>
        <div class="cfs-3">Let's secure your room</div>
        <div class="line"></div>
    </div>
    <span class="d-block mt-1 display-3 playfair-semib-italic">Book with us</span>
    <span class="d-block mt-1 cfs-3">One step away to paradise</span>
</section>

<div class="widget d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800">
    <div class="w-100">
        <script src="https://www.swiftbook.io/plugin/js/booking-service.min.js" id="propInfo" propertyid="361MOEWoq5V4syXzRmmqdUjQyMTg=" cal-rendererId="quickbook-widget" JDRN="Y" redirect="off"></script><div id="quickbook-widget"></div>
    </div>
</div>

<!-- INTRODUCTIONS -->
<section class="section">
    <div class="container d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800">
        <div class="text-center playfair-reg">
            <div class="d-flex align-items-center justify-content-center">
                <span class="line"></span>
                <span class="cfs-3">Experience a hassle-free stay</span>
                <span class="line"></span>
            </div>
            <span class="d-block mt-1 display-3 playfair-semib-italic">Featured Amenities</span>
            <span class="d-block mt-1 cfs-3">Convenience at your fingertips</span>
        </div>
    </div>

    <div class="container mt-4 mt-lg-5 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800">
        <div class="facs mt-2 playfair-reg">
            <div class="row row-cols-1 row-cols-lg-4">
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">pool</span><span class="ms-3 cfs-3">Outdoor pool</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">smoke_free</span><span class="ms-3 cfs-3">No smoking rooms</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">spa</span><span class="ms-3 cfs-3">Spa and wellness</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">fitness_center</span><span class="ms-3 cfs-3">fitness center</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">wifi</span><span class="ms-3 cfs-3">Free WiFi</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">local_parking</span><span class="ms-3 cfs-3">Parking on site</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">restaurant</span><span class="ms-3 cfs-3">Restaurant</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">family_restroom</span><span class="ms-3 cfs-3">Family rooms</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">concierge</span><span class="ms-3 cfs-3">24-hour front desk</span>
                </div>
                <div class="col d-flex align-items-center mb-1 mb-lg-3">
                    <span class="material-symbols-outlined facs-icon cfs-2">local_cafe</span><span class="ms-3 cfs-3">Breakfast</span>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery" data-aos="fade-up" data-aos-duration="800">
        <div class="image-row mt-5">
            <img src="assets/Images/reception.jpg">
            <img src="assets/Images/dining.jpg">
            <img src="assets/Images/lobby.png">
            <img src="assets/Images/lobby2.jpg">
        </div>
    </div>
</section>

<!-- ROOM SECTION -->
<section class="section" style="background: var(--theme-1);">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="800">
            <div class="d-flex align-items-center">
                <span class="d-block playfair-reg cfs-4">Our elegant and minimalistic</span>
                <span class="line"></span>
            </div>
            <span class="d-block playfair-semib-italic display-4">Rooms & Suites</span>
        </div>
        
        <!-- Room list split view start -->
        <div class="split-view mt-4 mt-lg-5">
            <!-- left pane start -->
            <div class="left-pane" data-aos="fade-up" data-aos-duration="800">
                <div class="room-card">
                    <?php roomFrame('Standard-Room.png','Standard Queen') ?>
                    <!-- Description area -->
                    <div class="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('16.5') ?>
                            <?php personLabel('2') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Flask with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('standardQueen') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
                <div class="room-card">
                    <?php roomFrame('sup-twin.jpg','Superior Twin') ?>
                    <!-- Description area -->
                    <div class="room-desc" id="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('16.5') ?>
                            <?php personLabel('2') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Flask with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('supTwin') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
                <div class="room-card">
                    <?php roomFrame('suite.png','Suite') ?>
                    <!-- Description area -->
                    <div class="room-desc" id="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('33.0') ?>
                            <?php personLabel('2') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('local_cafe','Mini bar') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Water kettle with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('suite') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- left pane end -->
            <!-- right pane start -->
            <div class="right-pane" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div class="room-card">
                    <?php roomFrame('deluxe-triple.jpg','Deluxe Triple') ?>
                    <!-- Description area -->
                    <div class="room-desc" id="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('33.0') ?>
                            <?php personLabel('3') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Water kettle with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('triple') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
                <div class="room-card">
                    <?php roomFrame('suitejr.png','Junior Suite') ?>
                    <!-- Description area -->
                    <div class="room-desc" id="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('33.0') ?>
                            <?php personLabel('3') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('local_cafe','Mini bar') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Water kettle with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('junior') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
                <div class="room-card">
                    <?php roomFrame('penthouse.png','Penthouse') ?>
                    <!-- Description area -->
                    <div class="room-desc" id="room-desc">
                        <!-- label row -->
                        <div class="row">
                            <?php sizeLabel('49.5') ?>
                            <?php personLabel('4') ?>
                        </div>
                        <!-- room features -->
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Appliances</span>
                        <div class="row playfair-semib">
                            <?php feature('ac_unit','Air conditioner') ?>
                            <?php feature('local_cafe','Mini bar') ?>
                            <?php feature('dresser','Wardrobe') ?>
                            <?php feature('tv','Smart TV') ?>
                            <?php feature('desk','Desk and chair') ?>
                            <?php feature('floor_lamp','Bedside lamp') ?>
                            <?php feature('water_heater','Water heater') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Amenities</span>
                        <div class="row playfair-semib">
                            <?php feature('health_and_beauty','Shampoo and body wash') ?>
                            <?php feature('dry_cleaning','Bath and hand towels') ?>
                            <?php feature('crop_7_5','Floor mat') ?>
                            <?php feature('kettle','Water kettle with mugs') ?>
                        </div>
                        <span class="d-block playfair-semib cfs-3 mt-3 mb-2">Items by request</span>
                        <div class="row playfair-semib">
                            <?php feature('iron','Iron and ironing board') ?>
                            <?php feature('bed','Extra bed') ?>
                            <?php feature('prayer_times','Praying mat') ?>
                        </div>
                        <div class="row mt-4">
                            <?php gallery('penthouse') ?>
                            <?php book('https://www.swiftbook.io/inst/#home?propertyId=24218') ?>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- right pane end -->
        </div>
        <!-- split view end -->
    </div>
</section>


<!-- Dining Section -->
<section class="section">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
        <div class="d-flex align-items-center">
            <span class="playfair-reg cfs-4">Indulge in the flavours of</span>
            <span class="line"></span>
        </div>
        <span class="d-block playfair-semib-italic display-4">Local Delicacies</span>
    </div>

    <div class="container dining p-3" data-aos="fade-up" data-aos-duration="800">
        <div id="FoodCarousel" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block d-lg-flex">
                        <div class="food-frame order-lg-2">
                            <img src="assets/Images/pokok.jpg">
                        </div>
                        <div class="food-desc order-lg-1">
                            <span class="d-block playfair-semib display-4">Pokok KL</span>
                            <span class="d-block playfair-semib cfs-4">by Brick House</span>

                            <p class="playfair-reg cfs-4 mt-3 mt-lg-4">
                                With a menu that’s constantly evolving to incorporate staple flavours from the East and West, 
                                Pokok is truly our epitome of innovation. The transparent glass roof and walls, and being surrounded 
                                by lush greenery become very apparent, making Pokok KL the perfect little haven.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block d-lg-flex">
                        <div class="food-frame order-lg-2">
                            <img src="assets/Images/daun.jpg">
                        </div>
                        <div class="food-desc order-lg-1">
                            <span class="d-block playfair-semib display-4">Daun KL</span>
                            <span class="d-block playfair-semib cfs-4">by Brick House</span>

                            <p class="playfair-reg cfs-4 mt-3 mt-lg-4">
                                The little sister to Pokok, Daun features fresh pastries and aromatic coffee, 
                                and is the best place to sit down and unwind before getting back to your busy day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#FoodCarousel" data-bs-slide="prev">
                <div class="d-flex align-items-center">
                    <span class="material-symbols-outlined cfs-1">arrow_left_alt</span>
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#FoodCarousel" data-bs-slide="next">
                <div class="d-flex align-items-center">
                    <span class="material-symbols-outlined cfs-1">arrow_right_alt</span>
                </div>
            </button>
        </div>
    </div>
</section>

<!-- More Activities -->
<section class="section" style="background: var(--theme-1);">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
        <div class="d-flex align-items-center">
            <span class="playfair-reg cfs-4">Elevate your stay with</span>
            <span class="line"></span>
        </div>
        <span class="d-block playfair-semib-italic display-4">Shops & Grocer</span>
    </div>

    <div class="container p-3 mt-4 mt-lg-5">
        <div class="shop-card" data-aos="fade-up" data-aos-duration="800">
            <div class="shop-imgs">
                <div class="shop-frame">
                    <img src="assets/Images/kedai/kedai.png">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/kedai/kedai2.png">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/kedai/kedai3.jpg">
                </div>
            </div>
            <div class="shop-desc">
                <div>
                    <span class="poppins-medium cfs-5" style="color: #a9a9a9;">SHOPPING</span>
                    <span class="d-block poppins-semibold cfs-1"><strong>KEDAI KL</strong></span>
                    <span class="d-block poppins-medium cfs-5">
                        Visit the artisanal marketplace that brings in a curation of homegrown brands going from 
                        handmade potteries to food and beverages.
                    </span>
                </div>
            </div>
        </div>
        <div class="shop-card" data-aos="fade-up" data-aos-duration="800">
            <div class="shop-imgs order-lg-2">
                <div class="shop-frame">
                    <img src="assets/Images/grocer/grocer1.png">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/grocer/grocer2.jpg">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/grocer/grocer3.jpg">
                </div>
            </div>
            <div class="shop-desc order-lg-1">
                <div>
                    <span class="poppins-medium cfs-5" style="color: #a9a9a9;">GROCERIES</span>
                    <span class="d-block poppins-semibold cfs-1"><strong>MERCEARIA</strong></span>
                    <span class="d-block poppins-medium cfs-5">
                        Missing something during your trip? Visit MERCEARIA to replenish the essentials for your stay
                        in a short walk away.
                    </span>
                </div>
            </div>
        </div>
        <div class="shop-card" data-aos="fade-up" data-aos-duration="800">
            <div class="shop-imgs">
                <div class="shop-frame">
                    <img src="assets/Images/health/health1.jpg">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/health/health2.jpg">
                </div>
                <div class="shop-frame">
                    <img src="assets/Images/health/health3.jpg">
                </div>
            </div>
            <div class="shop-desc">
                <div>
                    <span class="poppins-medium cfs-5" style="color: #a9a9a9;">HEALTHCARE</span>
                    <span class="d-block poppins-semibold cfs-1"><strong>MAHSA Health</strong></span>
                    <span class="d-block poppins-medium cfs-5">
                        Looking to improve your health and wellness? MAHSA Health’s ever-growing integrated healthcare facilities 
                        offer comprehensive healthcare services to people of all ages and backgrounds.
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Places of Interest -->
<section class="section">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
        <div class="d-flex align-items-center">
            <span class="playfair-reg cfs-4">We got you covered with</span>
            <span class="line"></span>
        </div>
        <span class="d-block playfair-semib-italic display-4">Places of Interest</span>
    </div>

    <div class="container mt-4 mt-lg-5" data-aos="fade-up" data-aos-duration="800">
        <div class="row row-cols-1 row-cols-lg-3">
            <?php placecard('um.jpg','University of Malaya','1.5km') ?>
            <?php placecard('ummc.jpg','UM Medical Centre','400m') ?>
            <?php placecard('klia.jpg','Kuala Lumpur International Airport','57km') ?>
            <?php placecard('temple.jpg','Thean Hou Temple','9.4km') ?>
            <?php placecard('pavilion.jpg','Pavilion KL','14km') ?>
            <?php placecard('klcc.jpg','Petronas Twin Towers','15km') ?>
        </div>
    </div>
</section>

<!-- Hotel Information -->
<section class="section" style="background: var(--theme-1);">
    <div class="container" data-aos="fade-up" data-aos-duration="800">
        <div class="d-flex align-items-center">
            <span class="playfair-reg cfs-4">Things to know</span>
            <span class="line"></span>
        </div>
        <span class="d-block playfair-semib-italic display-4">Residence Information</span>
    </div>

    <div class="container hotel-info mt-4 mt-lg-5" data-aos="fade-up" data-aos-duration="800">
        <div class="row row-cols-1 row-cols-lg-3">
            <!-- Check-in and Check-out times -->
            <div class="col mb-5">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Registration</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">schedule</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Check-in:</strong>   3.00 pm</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">schedule</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Check-out:</strong>  12.00 pm</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">check</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Minimum age to check-in:</strong>  18</span>
                </div>
            </div>
            <!-- Pool Hours -->
            <div class="col mb-5">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Swimming Pool</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">schedule</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Operation hours:</strong>   7.00 am - 8.00 pm</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">location_on</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Location:</strong>  Level 2 Mahsa Avenue</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">apparel</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Dress code:</strong>  Swimwear</span>
                </div>
            </div>
            <!-- Gym Hours -->
            <div class="col mb-5">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Fitness Centre</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">schedule</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Operation hours:</strong>   6.00 am - 11.00 pm</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">location_on</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Location:</strong>  Level 4 Block B - Urban Living</span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">apparel</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Dress code:</strong>  Fitness/Sportwear</span>
                </div>
            </div>
            <!-- Prohibited Items -->
            <div class="col mb-5 mb-lg-0">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Prohibited Items</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">block</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Animals of any kind</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">block</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Flammable or hazardous materials</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">block</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Food or objects of foul odour</strong></span>
                </div>
            </div>
            <!-- Parking Rate -->
            <div class="col mb-5 mb-lg-0">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Parking</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">local_parking</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>On-site parking @ Mahsa Avenue</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">payments</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Rate:</strong> RM7.00 per entry per day</span>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="material-symbols-outlined cfs-3">local_parking</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Open Parking</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">payments</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Rate:</strong> Varies with duration and day</span>
                </div>
            </div>
            <!-- Additional Perks -->
            <div class="col">
                <div class="d-flex align-items-center">
                    <span class="playfair-bold cfs-3">Perks and Services</span>
                    <i class="bi bi-stars cfs-3 ms-1"></i>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">smoke_free</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Smoke free property</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">hotel</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Extra bed for a fee</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">checked_bag</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Luggage storage</strong></span>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <span class="material-symbols-outlined cfs-3">wifi</span>
                    <span class="poppins-medium ms-2 cfs-5"><strong>Complimentary WiFi access</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

<a href="javascript:void(0)" onclick="scrollToTop()" class="back-to-top align-items-center justify-content-center">
    <span class="material-symbols-outlined cfs-4">north</span>
</a>

<?php include('assets/page-elements/footer.php') ?>