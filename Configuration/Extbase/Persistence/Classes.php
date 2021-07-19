<?php

declare(strict_types=1);

return [
    \Hebotek\HeboFeManager\Domain\Model\User::class => [
        'tableName' => 'fe_users',
        'properties' => [
            'personalNumber' => [
                'fieldName' => 'personal_number'
            ]
        ],
    ],
];