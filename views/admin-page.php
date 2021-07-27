<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .main-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
    }

    .main-wrapper * {
        font-family: 'Inter', sans-serif;
        color: #363636;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .main-wrapper .inner-wrapper {
        background: #f0f0f1;
        display: flex;
        width: 35%;
        padding: 30px 80px;
        flex-direction: column;
        box-shadow: -9px -9px 16px rgba(255, 255, 255, 0.8), 9px 9px 16px rgba(163, 177, 198, 0.5);
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper h1 {
        font-weight: 800;
        margin-bottom: 50px;
        text-align: center;
        font-size: 20px;
    }

    .main-wrapper .inner-wrapper h3 {
        margin-bottom: 20px;
        font-size: 14px;
    }

    .main-wrapper .inner-wrapper h3 span.applied {
        font-size: 12px;
        padding: 3px 10px;
        background: #34a155;
        color: white;
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper h3 span.not-applied {
        font-size: 12px;
        padding: 3px 10px;
        background: #363636;
        color: white;
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper form {
        display: flex;
        flex-direction: column;
    }

    .main-wrapper .inner-wrapper form input[type=submit] {
        text-decoration: none;
        text-align: center;
        margin-bottom: 10px;
        padding: 15px 0;
        border: none;
        font-weight: 800;
        font-size: 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: .2s transform ease-in-out;
    }

    .main-wrapper .inner-wrapper form input[type=submit]:hover {
        transform: scale(1.05);
    }

    .main-wrapper .inner-wrapper form .reapply-markups-btn {
        background: #B50000;
        color: white;
    }

    .main-wrapper .inner-wrapper form .remove-markups-btn {
        background: #d7d7d7;
        color: #363636;
    }

</style>

<?php 

    # Fetch Markups and create file
    if (isset($_POST['fetchMarkups'])) {

        $api_call = 'https://schema-gen-api.herokuapp.com/api/schema-generator?siteUrl=' . get_site_url();

        $api_res = file_get_contents($api_call);

        if (file_put_contents( WP_PLUGIN_DIR . "/rank-schema/markups.json", $api_res)) {
            echo '
            <div class="notice notice-success is-dismissible">
                <p>Rank Schema Generator Connected!</p>
            </div>
            ';
        } else {
            echo '
            <div class="notice notice-error is-dismissible">
                <p>Rank Schema Generator Failed to Connect!</p>
            </div>
            ';
        }
    }

    if (isset($_POST['reapplyMarkups'])) {

        $api_call = 'https://schema-gen-api.herokuapp.com/api/schema-generator?siteUrl=' . get_site_url();

        $api_res = file_get_contents($api_call);

        if (file_put_contents( WP_PLUGIN_DIR . "/rank-schema/markups.json", $api_res)) {
            echo '
            <div class="notice notice-success is-dismissible">
                <p>Rank Schema Generator refreshed & re-applied!</p>
            </div>
            ';
        } else {
            echo '
            <div class="notice notice-error is-dismissible">
                <p>Rank Schema Generator Failed to refreshed & re-applied!</p>
            </div>
            ';
        }
    }

    if (isset($_POST['removeMarkups'])) {
        
        if ( unlink( WP_PLUGIN_DIR . "/rank-schema/markups.json" ) ) {
            echo '

            <div class="notice notice-warning is-dismissible">
                <p>Rank Schema Generator removed!</p>
            </div>

            ';
        } else {
            echo '

            <div class="notice notice-error is-dismissible">
                <p>Rank Schema Generator Failed to remove!</p>
            </div>
            
            ';
        }

    }

?>

<div class="main-wrapper">
    <div class="inner-wrapper">
        <img src="https://schema-gen-api.herokuapp.com/images/logo.svg">
        <h1>Schema Generator</h1>
        <h3>Status: <?php if ( file_exists( WP_PLUGIN_DIR . "//rank-schema//markups.json" ) ) {
            echo '
                <span class="applied">Applied</span></h3>
                <form action="#" method="POST">
                    <input class="reapply-markups-btn" type=submit name="reapplyMarkups" value="Refresh & Re-apply" />

                    <input class="remove-markups-btn" type=submit name="removeMarkups" value="Remove Markups" />
                </form>
            ';
        } else {
            echo '
                <span class="not-applied">Not Applied</span></h3>
                <form action="#" method="POST">
                    <input class="reapply-markups-btn" type=submit name="fetchMarkups" value="Connect & Apply" />
                </form>
            ';
        } ?>
        
    </div>
</div>