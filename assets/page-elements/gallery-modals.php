<?php
    function roomPic($filename,$picName){
        echo '
            <div class="col">
                <div class="room-gallery">
                    <img src="assets/Images/'.$filename.'/'.$picName.'">
                </div>
            </div>
        ';
    }
?>
<!-- Standard Queen -->
<div class="modal fade" id="standardQueen" tabindex="-1" aria-labelledby="standardQueen" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-12 col-lg-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Standard Queen</span>
            </div>
            <?php sizeLabel('16.5') ?>
            <?php personLabel('2') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Standard Queen Rooms are decorated with the comfort of our guests in mind. 
            Accommodating up to 2 persons and equipped with high tech comforts such as high speed internet access, 
            USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('standard','standard1.png') ?>
            <?php roomPic('standard','standard2.png') ?>
            <?php roomPic('standard','standard3.png') ?>
            <?php roomPic('standard','standard4.png') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Superior Twin -->
<div class="modal fade" id="supTwin" tabindex="-1" aria-labelledby="supTwin" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Superior Twin</span>
            </div>
            <?php sizeLabel('16.5') ?>
            <?php personLabel('2') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Superior Twin Rooms are decorated to give our guests an extra pop of colour to sprinkle more joy 
            to their stay. Accommodating up to 2 persons and equipped with high tech comforts such as 
            high speed internet access, USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('twin','twin1.jpg') ?>
            <?php roomPic('twin','twin2.jpg') ?>
            <?php roomPic('twin','twin3.jpg') ?>
            <?php roomPic('twin','twin4.jpg') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Accessible Queen -->
<div class="modal fade" id="disQueen" tabindex="-1" aria-labelledby="disQueen" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Accessible Queen</span>
            </div>
            <?php sizeLabel('17.0') ?>
            <?php personLabel('2') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Double Room - Disability Access are decorated with the comfort of our guests in mind. 
            Accommodating up to 2 persons and equipped with high tech comforts such as high speed internet access, USB ports, 
            and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('disabled','disabled1.jpg') ?>
            <?php roomPic('disabled','disabled2.jpg') ?>
            <?php roomPic('disabled','disabled3.jpg') ?>
            <?php roomPic('disabled','disabled4.jpg') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Suite -->
<div class="modal fade" id="suite" tabindex="-1" aria-labelledby="suite" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Suite</span>
            </div>
            <?php sizeLabel('33.0') ?>
            <?php personLabel('2') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Suites are decorated with the comfort of our guests in mind. 
            Accommodating up to 2 persons and equipped with a lounging area and high tech comforts such as 
            high speed internet access, USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('suite','suite1.png') ?>
            <?php roomPic('suite','suite2.png') ?>
            <?php roomPic('suite','suite3.png') ?>
            <?php roomPic('suite','suite4.png') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Deluxe Triple -->
<div class="modal fade" id="triple" tabindex="-1" aria-labelledby="triple" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Deluxe Triple</span>
            </div>
            <?php sizeLabel('33.0') ?>
            <?php personLabel('3') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Deluxe Triple Rooms are decorated with the comfort of our guests in mind. 
            Accommodating up to 3 persons and equipped with 1 queen size bed, 1 single bed, high tech comforts such as 
            high speed internet access, USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('triple','triple1.jpg') ?>
            <?php roomPic('triple','triple2.jpg') ?>
            <?php roomPic('triple','triple3.jpg') ?>
            <?php roomPic('standard','standard4.png') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Suite -->
<div class="modal fade" id="penthouse" tabindex="-1" aria-labelledby="penthouse" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Penthouse</span>
            </div>
            <?php sizeLabel('49.5') ?>
            <?php personLabel('4') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Penthouses are decorated with the comfort of our guests in mind. 
            Accommodating up to 2 adults and 2 children, the penthouse equipped with a lounging area and high tech comforts 
            such as high speed internet access, USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('penthouse','penthouse1.png') ?>
            <?php roomPic('penthouse','penthouse2.png') ?>
            <?php roomPic('penthouse','penthouse3.png') ?>
            <?php roomPic('penthouse','penthouse4.png') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Junior Suite -->
<div class="modal fade" id="junior" tabindex="-1" aria-labelledby="junior" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="modal-title playfair-bold cfs-3" id="exampleModalLabel">Junior Suite</span>
            </div>
            <?php sizeLabel('33.0') ?>
            <?php personLabel('3') ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="playfair-semib cfs-5">
            Urban Living Junior Suite Rooms are decorated to give our guests an extra pop of colour 
            to sprinkle more joy to their stay. Accommodating up to 3 persons and equipped with high tech comforts 
            such as high speed internet access, USB ports, and smart TV.
        </span>
        <div class="row row-cols-1 row-cols-lg-2">
            <?php roomPic('junior','junior1.png') ?>
            <?php roomPic('junior','junior2.png') ?>
            <?php roomPic('junior','junior3.png') ?>
            <?php roomPic('junior','junior4.png') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal init -->
<script>
    window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById("standardQueen"));
        myModal.focus();
    };
</script>