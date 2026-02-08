<?php

function placecard($imgName,$place,$dist){
    echo '
        <div class="col mb-3">
            <div class="place-card">
                <img src="assets/Images/'.$imgName.'">
                <div class="place-desc poppins-semibold">
                    <span class="cfs-4">'.$place.'</span>
                    <div class="d-flex align-items-center mt-1">
                        <span class="material-symbols-outlined cfs-4">distance</span>
                        <span class="ms-2 cfs-5">'.$dist.'</span>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    ';
}

?>