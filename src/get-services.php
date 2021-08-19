<?php
if (isset($CONFIG['services'])) {
    foreach ($CONFIG['services'] as $topLvlService) {
        /* TOP LEVEL SERVICES */
        echo '
        <div class="service-wrapper top-level" data-name="'.$topLvlService['name'].'" data-url="'.$topLvlService['url'].'" data-description="'.$topLvlService['description'].'"><div class="service">
            <p><span class="name">'.$topLvlService['name'].'</span> - '.$topLvlService['url'].'</p>
            <img class="add-btn" src="'.$SERVER.'images/add_icon_small.svg" />
            <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" />
            <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
            </div><div class="sub-services" data-key="'.$topLvlService['url'].'">';

            if (isset($topLvlService['subServices'])) {
                foreach ($topLvlService['subServices'] as $midLvlService) {
                    /* MID LEVEL SERVICES */
                    echo '<div class="service-wrapper" data-name="'.$midLvlService['name'].'" data-url="'.$midLvlService['url'].'" data-description="'.$midLvlService['description'].'"><div class="service">
                        <p><span class="name">'.$midLvlService['name'].'</span> - '.$midLvlService['url'].'</p>
                        <img class="add-btn" src="'.$SERVER.'images/add_icon_small.svg" />
                        <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" />
                        <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
                        </div><div class="sub-services" data-key="'.$midLvlService['url'].'" data-is-sub-service="true">';
                        
                        if (isset($midLvlService['subServices'])) {
                            foreach ($midLvlService['subServices'] as $lastLvlService) {
                                /* LAST LEVEL SERVICES */
                                
                                echo '<div class="service-wrapper" data-name="'.$lastLvlService['name'].'" data-url="'.$lastLvlService['url'].'" data-description="'.$lastLvlService['description'].'"><div class="service">
                                    <p><span class="name">'.$lastLvlService['name'].'</span> - '.$lastLvlService['url'].'</p>
                                    <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" style="margin-left: auto;" />
                                    <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
                                    </div></div>';
                            }
                        }
                    echo  '</div></div>';
                }
            }
            
        echo '</div></div>';
    }
}