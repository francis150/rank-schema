<?php
// NOTE PHP Functions here ...'

/* NOTE Create Config file when get started button is clicked */
if (isset($_POST['get-started'])) {
    $skeletonData = array (
        'schemaType' => 'LocalBusiness',
        'businessName' => '',
        'websiteURL' => '',
        'imageURL' => '',
        'description' => '',
        'disambiguatingDescription' => '',
        'slogan' => '',
        'email' => '',
        'phone' => '',
        'streetAddress' => '',
        'cityTown' => '',
        'state' => '',
        'zipCode' => '',
        'country' => '',
        'query' => '',
        'keywords' => array (),
        'activated' => false
    );

    if (file_put_contents(plugin_dir_path( __FILE__ ). 'config.json', json_encode($skeletonData, JSON_PRETTY_PRINT))) {
        echo "<script>
        document.querySelector('.rank-main-wrapper .get-started-container').style.display = 'none';
        document.querySelector('.rank-main-wrapper .form-container').style.display = 'inherit';
        </script>";
    }
}