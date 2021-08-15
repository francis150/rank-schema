<?php
if (isset($CONFIG)) {
    foreach ($CONFIG['services'] as $topLvlService) {
        /* TOP LEVEL SERVICES */
        echo '
        <div class="service-wrapper top-level" data-name="'.$topLvlService['serviceName'].'" data-url="'.$topLvlService['serviceUrl'].'" data-description="'.$topLvlService['serviceDescription'].'">
        
            <div class="service">
            <p><span class="name">'.$topLvlService['serviceName'].'</span> - '.$topLvlService['serviceUrl'].'</p>
            <img class="add-btn" src="'.$SERVER.'images/add_icon_small.svg" />
            <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" />
            <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
            </div>

            <div class="sub-services" data-key="'.$topLvlService['serviceUrl'].'">';

            if (isset($topLvlService['subServices'])) {
                foreach ($topLvlService['subServices'] as $midLvlService) {
                    /* MID LEVEL SERVICES */
                    echo '
                    <div class="service-wrapper" data-name="'.$midLvlService['serviceName'].'" data-url="'.$midLvlService['serviceUrl'].'" data-description="'.$midLvlService['serviceDescription'].'">
                    
                        <div class="service">
                        <p><span class="name">'.$midLvlService['serviceName'].'</span> - '.$midLvlService['serviceUrl'].'</p>
                        <img class="add-btn" src="'.$SERVER.'images/add_icon_small.svg" />
                        <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" />
                        <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
                        </div>

                        <div class="sub-services" data-key="'.$midLvlService['serviceUrl'].'" data-is-sub-service="true">';
                        
                        if (isset($midLvlService['subServices'])) {
                            foreach ($midLvlService['subServices'] as $lastLvlService) {
                                /* LAST LEVEL SERVICES */
                                
                                echo '
                                <div class="service-wrapper" data-name="'.$lastLvlService['serviceName'].'" data-url="'.$lastLvlService['serviceUrl'].'" data-description="'.$lastLvlService['serviceDescription'].'">

                                    <div class="service">
                                    <p><span class="name">'.$lastLvlService['serviceName'].'</span> - '.$lastLvlService['serviceUrl'].'</p>
                                    <img class="edit-btn" src="'.$SERVER.'images/edit_icon.svg" style="margin-left: auto;" />
                                    <img class="trash-btn" src="'.$SERVER.'images/trash_icon.svg" />
                                    </div>

                                </div>
                                ';

                            }
                        }


                    echo  '</div>
                    </div>';
                }
            }
            
        echo '</div>
        </div>';
    }
}