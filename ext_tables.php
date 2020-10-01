<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'I6m.Feedback',
            'Feedback',
            'feedback'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('feedback', 'Configuration/TypoScript', 'feedback');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_feedback_domain_model_feedback', 'EXT:feedback/Resources/Private/Language/locallang_csh_tx_feedback_domain_model_feedback.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_feedback_domain_model_feedback');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_feedback_domain_model_textelement', 'EXT:feedback/Resources/Private/Language/locallang_csh_tx_feedback_domain_model_textelement.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_feedback_domain_model_textelement');

    }
);
