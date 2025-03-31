<?php

return [
    'driver' => env('EVENT_STREAM_DRIVER', 'nats-jetstream'),

    'nats-jetstream' => [
        'url' => env('NATS_JETSTREAM_URL', 'nats://localhost:4222'),
        'timeout' => 30.0, // in seconds
        'max_retries' => 3,
        'retry_interval' => 1000, // in milliseconds
    ],
];