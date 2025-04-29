<?php
if (TYPO3_MODE === 'BE') {
  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
  $iconRegistry->registerIcon(
      'ce-icon-ce-typoscript',
      \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
      ['source' => 'EXT:ce_typoscript/Resources/Public/Icons/ce-icon-ce-typoscript.svg']
  );
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:ce_typoscript/Configuration/PageTS/ce_typoscript.typoscript"'
  );
}
