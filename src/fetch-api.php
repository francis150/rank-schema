<?php

$payload = file_get_contents('php://input');

// API URL
$url = '***REMOVED***schema-generator/build';

// Create a new cURL resource
$ch = curl_init($url);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Create or update Markups.json
if (file_put_contents( 'markups.json', $result)) header('Fetched schema markups', true, 200);
else header('Failed to Fetch Api!', true, 500);

// Close cURL resource
curl_close($ch);