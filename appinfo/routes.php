<?php

return [
    'resources' => [],
    'routes' => [
        ['name' => 'note#getNote', 'url' => '/note/get_note', 'verb' => 'GET'],
        ['name' => 'note#openNote', 'url' => '/note/open', 'verb' => 'GET'],
        ['name' => 'note#extractNote', 'url' => '/note/extract', 'verb' => 'GET'],
        
        ['name' => 'note#create', 'url' => '/notes', 'verb' => 'POST'],
        ['name' => 'note#createNote', 'url' => '/note/create', 'verb' => 'GET'],

        // voice recording routes
        //['name' => 'public_api#getOpusEncoder', 'url' => '/recorder/encoderWorker.min.wasm', 'verb' => 'GET' ],
        //['name' => 'public_api#getOpusDecoder', 'url' => '/recorder/decoderWorker.min.wasm', 'verb' => 'GET' ],
    ],
];
