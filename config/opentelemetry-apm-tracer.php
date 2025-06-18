<?php

return [
    'enabled' => env('OPENTELEMETRY_APM_TRACER_ENABLED', true),
    'timeout' => env('OPENTELEMETRY_APM_TRACER_TIMEOUT', 30),
    'log_channel' => env('OPENTELEMETRY_APM_TRACER_LOG', 'stack'),
];
