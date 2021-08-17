<?php

$skeletonData = array (
    'schemaType' => '',
    'businessName' => '',
    'ownersName' => '',
    'websiteURL' => '',
    'imageURL' => '',
    'description' => '',
    'disambiguatingDescription' => '',
    'slogan' => '',
    'privacyPolicyURL' => '',
    'aboutUrl' => '',
    'contactUrl' => '',
    'email' => '',
    'phone' => '',
    'streetAddress' => '',
    'cityTown' => '',
    'state' => '',
    'zipCode' => '',
    'country' => '',
    'query' => '',
    'services' => array (),
    'keywords' => array (),
    'areasServed' => array (),
    'backlinks' => array (),
    'activated' => false
);
file_put_contents('config.json', json_encode($skeletonData, JSON_PRETTY_PRINT));