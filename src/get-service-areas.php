<?php

if (isset($CONFIG['areasServed'])) {
    foreach ($CONFIG['areasServed'] as $serviceArea) {
        
        echo '
        <div class="service-area-wrapper" data-country="'.$serviceArea['country'].'" data-state="'.$serviceArea['state'].'" data-city-town="'.$serviceArea['cityTown'].'" data-url="'.$serviceArea['url'].'" data-zip-codes="'.implode(",",$serviceArea['zipCodes']).'">
            <div class="service-area">
                <p><span class="name">'.$serviceArea['cityTown'].'</span> - '.$serviceArea['state'].'</p><img style="margin-left: auto;" class="trash-btn" src="'.$SERVER.'images/trash_icon.svg">
            </div>
        </div>
        ';

    }
}