<?php
    if ($page_name == 'Policies and Rules'){
        $navclass = 'sticky-navbar';
    }elseif ($page_name == 'Urban Living'){
        $navclass = 'navbar';
    }

    echo '
        <header class="'.$navclass.'">
            <div class="container">

                <div class="d-flex align-items-center">
                    <img src="assets/Images/UrbanLiving.png" style="width: 2.8rem;">
                    <img src="assets/Images/urbanLogo.png" class="ms-4" style="width: 15.5rem;">
                </div>

            </div>
        </header>
    ';
?>