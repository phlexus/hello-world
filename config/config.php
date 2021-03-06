<?php
declare(strict_types=1);

return [
    'modules' => [
        'CustomHelloWorld' => [
            'className' => 'MyApp\Modules\CustomHelloWorld\Module',
            'path' => __DIR__ . '/../modules/custom-hello-world/Module.php',
            'router' => __DIR__ . '/../modules/custom-hello-world/config/routes.php',
        ],
    ],
];