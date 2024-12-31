<?php

defined('TYPO3') or die();

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'blog',
        'Configuration/TsConfig/Page/backend_layouts.tsconfig',
        'Backend layout'
    );