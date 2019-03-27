<?php
$jobs = json_encode(file_get_contents('https://api.zenploy.io/v1/company/science-me-up/jobs'));
var_dump($jobs);