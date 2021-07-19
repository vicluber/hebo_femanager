<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Add new fields to fe_users table
 */
$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
$tmpFeUsersColumns = [
    'personal_number' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:hebo_femanager/Resources/Private/Language/locallang_db.xlf:' .
            'hebo_femanager.personal_number',
        'config' => [
            'type' => 'input',
            'size' => 32
        ],
    ],
    'tx_extbase_type' => [
        'config' => [
            'type' => 'input',
            'default' => '0'
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns, true);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'personal_number');

/**
 * Add page TSConfig for the two new fields
 */
$tsConfig = 'tx_femanager.flexForm.new.addFieldOptions.personal_number = Personal Number' . PHP_EOL;
$tsConfig .= 'tx_femanager.flexForm.edit < tx_femanager.flexForm.new';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($tsConfig);
