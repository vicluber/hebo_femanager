<?php
/**
 * Add new fields to fe_users table
 */
$tmpFeUsersColumns = [
    'personal_number' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:hebo_femanager/Resources/Private/Language/locallang_db.xlf:' .
            'hebo_femanager.personal_number',
        'config' => [
            'type' => 'input',
            'size' => 32
        ],
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns, true);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'personal_number', '', 'after:last_name');

