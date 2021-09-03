<?php
if (!empty($CONFIG['aboutPages'])) {
    foreach ($CONFIG['aboutPages'] as $aboutPage) {
        echo '<div class="about-page" data-url="'.$aboutPage.'" data-key="'.$aboutPage.'">
        <p>'.$aboutPage.'</p>
        <button type="button" class="about-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="about-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div>';
    }
}