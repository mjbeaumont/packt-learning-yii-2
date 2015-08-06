<?php
/**
 * Application configuration for acceptance tests
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../config/web.php'),
    require(__DIR__ . '/config.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=monstermash.dev;dbname=monstermash-test',
            ]
        ]
    ]
);
