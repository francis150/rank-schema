<?php
if (file_put_contents('config.json', file_get_contents('php://input'))) header('Successfully Updated Configuration!', true, 200);
else header('Failed to Update Configuration!', true, 500);