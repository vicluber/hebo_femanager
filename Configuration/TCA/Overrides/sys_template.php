<?php
defined('TYPO3') or die();

call_user_func(function()
{
   $extensionKey = 'hebo_femanager';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'Configuration/TypoScript',
      'Config for hebo_femanager (femanager extension)'
   );
});