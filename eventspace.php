<!-- start: header -->
<?php include 'header_gallery.php'; ?>
<!-- end: header -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/gallery_cover_header.jpg);">
        <div class="bradcumbContent">
            <h2>Meetings &amp; Events</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Tab links -->
                    <div class="tab">
                        <button class="tablinks" onclick="openGallery(event, 'mtgRoom')" id="defaultOpen">Meeting Room</button>
                        
            <button class="tablinks" onclick="openGallery(event, 'vipRoom')">VIP Room</button>
            <button class="tablinks" onclick="openGallery(event, 'evtLounge')">Lounge &amp; Bar</button>
                    </div>
                    
                    <!--Meeting Room-->
                    <div id="mtgRoom" class="tabcontent active">
                        <div class="mygallery" >
                            <div class="intro-text">Urban Living Meeting Room, the perfect environment for your pitch and presentation. It can accomodate up to 10 persons, with table and chairs. Equipped with high tech comforts such as high speed internet access, USB ports, and a smart TV.</div>
                            <a href="gallery/meetings/meeting_room.jpg">
                                <img alt="Meeting Room" src="gallery/meetings/meeting_room.png" />
                            </a>
                        </div>
                    </div>
                    
                    <!--VIP Room-->
                    <div id="vipRoom" class="tabcontent active">
                        <div class="mygallery" >
                            <div class="intro-text">
                                
                                Urban Living VIP Room, an urban decorated space that can accomodate up to 12 persons. Equipped with high tech comforts such as high speed internet access, USB ports, and a smart TV.
                            </div>
                            <a href="gallery/viproom/vip_room.png">
                                <img alt="VIP Room" src="gallery/viproom/vip_room.jpg" />
                            </a>
                           
                        </div>
                    </div>
                    
                    <!--Lounge-->
                    <div id="evtLounge" class="tabcontent">
                    	<div class="mygallery">
                    	    <div class="intro-text">
                    	        A beautiful space for your dream events, ranging from intimate weddings to exclusive dinners.
                    	        </div>                                
                    	        <a href="gallery/lounge/lounge_bar_1.jpg">
           <img alt="Lounge Bar" src="gallery/lounge/lounge_bar_1.jpg" />
                                </a>
                             <a href="gallery/lounge/lounge_bar_2.png">
           <img alt="Lounge Bar" src="gallery/lounge/lounge_bar_2.png" />
                                </a>
                            	<a href="gallery/lounge/lounge_bar_3.png">
           <img alt="Lounge Bar" src="gallery/lounge/lounge_bar_3.png" />
                                </a>
                                <a href="gallery/lounge/IMG_2055.jpg">
           <img alt="Lounge Bar" src="gallery/lounge/IMG_2055.jpg" />
                                </a>
                                <a href="gallery/lounge/IMG_7559.JPEG">
           <img alt="Lounge Bar" src="gallery/lounge/IMG_7559.JPEG" />
                                </a>
                    	</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

<!-- start: footer-->
<?php include 'footer_gallery.php'; ?>
<!-- end: footer -->