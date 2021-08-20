<?php

$payload = file_get_contents('php://input');
file_put_contents('config.json', $payload);