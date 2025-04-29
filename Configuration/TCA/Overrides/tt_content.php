<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
      'tt_content',
      'CType',
      [
          'LLL:EXT:ce_typoscript/Resources/Private/Language/locallang.xlf:wizard.ce_typoscript.title',
          'ce_typoscript',
          'ce-icon-ce-typoscript'
      ],
      'textmedia',
      'after'
  );
  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ce_typoscript'] = 'ce-icon-ce-typoscript';
  $GLOBALS['TCA']['tt_content']['types']['ce_typoscript'] = array(
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
           --palette--;;general,
            header;LLL:EXT:ce_typoscript/Resources/Private/Language/locallang.xlf:wizard.ce_typoscript.title:header_formlabel,
        --linebreak--,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
           --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
           --palette--;;hidden,
           --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
  );
});
