<?php
return [
    'propel' => [
        'database' => [
            'connections' => [
                'default' => [
                    'adapter' => 'mysql',
                    'dsn' => 'mysql:host=localhost;port=3306;dbname=phalcon',
                    'user' => 'phalcon',
                    'password' => 'phalcon',
                    'settings' => [
                        'charset' => 'utf8mb4'
                    ]
                ]
            ]
        ]
    ]
];
