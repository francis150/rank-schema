<?php
if (!empty($CONFIG['contactPages'])) {
    foreach ($CONFIG['contactPages'] as $contactPage) {
        echo '<div class="contact-page" data-url="'.$contactPage.'" data-key="'.$contactPage.'">
        <p>'.$contactPage.'</p>
        <button type="button" class="contact-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="contact-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div>';
    }
}