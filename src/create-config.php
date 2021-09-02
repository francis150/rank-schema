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
  'email' => '',
  'phone' => '',
  'streetAddress' => '',
  'cityTown' => '',
  'state' => '',
  'zipCode' => '',
  'country' => '',
  'query' => '',
  'backlinks' => array (),
  'keywords' => array (),
  'faqPage' => array (
    'url' => '',
    'faqs' => array (),
  ),
  'aboutPages' => array (),
  'contactPages' => array (),
  'services' => array (),
  'areasServed' => array (),
  'blogPosts' => array (),
  'activated' => false,
);

if (file_put_contents('config.json', json_encode($skeletonData, JSON_PRETTY_PRINT))) {
    echo true;
} else {
    echo false;
}