<?php
if (!empty($CONFIG['services'])) {
    foreach ($CONFIG['services'] as $service) {
        
        echo '<div class="service-page" data-lvl="1" data-name="'.$service['name'].'" data-url="'.$service['url'].'" data-description="'.$service['description'].'"><div class="head">
        <p><span>'.$service['name'].'</span> - '.$service['url'].'</p>
        <button type="button" class="service-add-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/add_icon_small.svg"></button>
        <button type="button" class="service-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="service-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div><div class="sub-services">';

        if (isset($service['subServices'])) {

            foreach ($service['subServices'] as $_service) {
                echo '<div class="service-page" data-lvl="2" data-name="'.$_service['name'].'" data-url="'.$_service['url'].'" data-description="'.$_service['description'].'"><div class="head">
                <p><span>'.$_service['name'].'</span> - '.$_service['url'].'</p>
                <button type="button" class="service-add-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/add_icon_small.svg"></button>
                <button type="button" class="service-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
                <button type="button" class="service-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
                </div><div class="sub-services">';

                if (isset($_service['subServices'])) {

                    foreach ($_service['subServices'] as $__service) {
                        echo '<div class="service-page" data-lvl="3" data-name="'.$__service['name'].'" data-url="'.$__service['url'].'" data-description="'.$__service['description'].'"><div class="head">
                        <p><span>'.$__service['name'].'</span> - '.$__service['url'].'</p>
                        <button type="button" class="service-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
                        <button type="button" class="service-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
                        </div></div>';
                    }
                    
                }

                echo '</div></div>';
            }
        }
        
        echo '</div></div>';

    }  
}