<?php

if (isset($CONFIG['areasServed'])) {
    foreach ($CONFIG['areasServed'] as $serviceArea) {
        
        echo '
        <div class="service-area-wrapper">
            <div class="service-area">
                <p><span class="name">'.$serviceArea['cityTown'].'</span> - '.$serviceArea['state'].'</p>
                <img class="edit-btn" style="margin-left: auto;" src="'.$SERVER.'images/edit_icon.svg">
                <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg">
            </div>
        </div>
        ';

    }
}