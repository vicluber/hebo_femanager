<?php
defined('TYPO3') or die();

call_user_func(function () {
    // Register extended domain class
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
        ->registerImplementation(
            \In2code\Femanager\Domain\Model\User::class,
            \Hebotek\HeboFeManager\Domain\Model\User::class
    );
});