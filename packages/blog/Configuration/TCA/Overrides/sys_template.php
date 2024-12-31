<?php
defined('TYPO3') or die();

call_user_func(function() {
    /**
     * Extension key
     */
    $extensionKey = 'blog';

    /**
     * Default TypoScript for YourExtension
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Blog Package'
    );
});