<?php

// Config for Cloudstudio/Ollama

return [
    'model' => env('OLLAMA_MODEL', 'llama3'),
    'url' => env('OLLAMA_URL', 'http://127.0.0.1:11434'),
    'default_prompt' => env('OLLAMA_DEFAULT_PROMPT', 'Ola, posso ajudar?'),
    'connection' => [
        'timeout' => env('OLLAMA_CONNECTION_TIMEOUT', 300),
    ],
];
