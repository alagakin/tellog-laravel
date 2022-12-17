<?php

return [
    'api_token' => env('TELLOG_API_TOKEN'),
    'chat_id' => env('TELLOG_CHAT_ID'),
    'message_template' => env('TELLOG_MESSAGE_TEMPLATE', 'tellog-message'),
    'error_template' => env('TELLOG_ERROR_TEMPLATE', 'tellog-error')
];