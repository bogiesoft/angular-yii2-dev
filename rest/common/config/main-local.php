<?php
/**
 * Local config for developer of environment.
 *
 * @author Evgeniy Tkachenko <et.coder@gmail.com>
 */

return [
    'language' => 'en',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=angularyii2',
            'username' => 'admin',
            'password' => 'admin',
            'charset' => 'utf8',
        ],
    ],
];
