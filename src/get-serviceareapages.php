<?php
if (!empty($CONFIG['areasServed'])) {
    foreach ($CONFIG['areasServed'] as $serviceAreaPage) {
        echo '<div class="service-area-page" data-key="'.$serviceAreaPage['url'].'" data-country="'.$serviceAreaPage['country'].'" data-state="'.$serviceAreaPage['state'].'" data-city-town="'.$serviceAreaPage['cityTown'].'" data-url="'.$serviceAreaPage['url'].'" data-zip-codes="'.implode(",",$serviceAreaPage['zipCodes']).'"';
        if (isset($serviceAreaPage['streetAddress'])) echo 'data-street-address="'.$serviceAreaPage['streetAddress'].'"';
        if (isset($serviceAreaPage['email'])) echo 'data-email="'.$serviceAreaPage['email'].'"';
        if (isset($serviceAreaPage['phone'])) echo 'data-phone="'.$serviceAreaPage['phone'].'"';
        echo '>
        <p><span>'.$serviceAreaPage['cityTown'].', '.$serviceAreaPage['state'].'</span> - '.$serviceAreaPage['url'].'</p>
        <button type="button" class="service-area-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="service-area-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div>';
    }
}

