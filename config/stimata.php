<?php

return [
    'client_id' => env('STIMATA_CLIENT_ID', ''),
    'client_secret' => env('STIMATA_CLIENT_SECRET', ''),
    'redirect_uri' => env('STIMATA_REDIRECT_URI', ''),
    'base_url' => env('STIMATA_BASE_URL', 'http://localhost:9091/api'),
];