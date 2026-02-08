<?php

function roomFrame($imgName,$roomName){
    echo '
        <div class="room-frame" id="room-frame">
            <img src="assets/Images/'.$imgName.'">
            <span class="poppins-medium cfs-1">'.$roomName.'</span>
        </div>
    ';
}

function sizeLabel($roomsize){
    echo '
        <div class="col-auto">
            <div class="label">
                <span class="material-symbols-outlined cfs-3">square_foot</span>
                <span class="poppins-medium cfs-5">'.$roomsize.' m<sup>2</sup></span>
            </div>
        </div>
    ';
}

function personLabel($capacity){
    echo '
        <div class="col-auto">
            <div class="label">
                <span class="material-symbols-outlined cfs-3">group</span>
                <span class="poppins-medium cfs-5">'.$capacity.' persons</span>
            </div>
        </div>
    ';
}

function bedLabel($capacity){
    echo '
        <div class="col-auto">
            <div class="label">
                <span class="material-symbols-outlined cfs-3">bed</span>
                <span class="poppins-medium cfs-5">'.$capacity.' Queen bed(s)</span>
            </div>
        </div>
    ';
}

function disabled(){
    echo '
        <div class="col-auto">
            <div class="label">
                <span class="material-symbols-outlined cfs-3">accessible</span>
                <span class="poppins-medium cfs-5">Disability Access</span>
            </div>
        </div>
    ';
}

function gallery($roomID){
    echo '
        <div class="col-auto">
            <button type="button" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#'.$roomID.'">
                <span class="material-symbols-outlined cfs-2">photo_prints</span>
                <span class="poppins-medium cfs-5">View gallery</span>
            </button>
        </div>
    ';
}

function book($uniqueLink){
    echo '
        <div class="col-auto">
            <a href="'.$uniqueLink.'" target="_blank" class="gallery-btn">
                <span class="material-symbols-outlined cfs-2">event</span>
                <span class="poppins-medium cfs-5">Book room</span>
            </a>
        </div>
    ';
}

function feature($icon,$name){
    echo '
        <div class="col-auto features">
            <span class="material-symbols-outlined cfs-3">'.$icon.'</span>
            <span class="cfs-5">'.$name.'</span>
        </div>
    ';
}

function RUfeature($icon,$name){
    echo '
        <div class="col-auto features">
            <span class="material-symbols-outlined cfs-2">'.$icon.'</span>
            <span class="cfs-4">'.$name.'</span>
        </div>
    ';
}

?>