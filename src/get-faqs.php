<?php
if (isset($CONFIG['faqPage']) && !empty($CONFIG['faqPage']['faqs'])) {
    foreach ($CONFIG['faqPage']['faqs'] as $faq) {
        echo '<div data-question="'.$faq['question'].'" data-key="'.$faq['question'].'" data-answer="'.$faq['answer'].'" class="faq"><div class="head">
        <h3 class="question">'.$faq['question'].'</h3>
        <button type="button" class="faq-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="faq-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div><p>'.$faq['answer'].'</p></div>';
    }
}