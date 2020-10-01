<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'I6m.Feedback',
            'Feedback',
            [
                'Feedback' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Feedback' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        feedback {
                            iconIdentifier = feedback-plugin-feedback
                            title = LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_feedback.name
                            description = LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_feedback.description
                            tt_content_defValues {
                                CType = list
                                list_type = feedback_feedback
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'feedback-plugin-feedback',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:feedback/Resources/Public/Icons/user_plugin_feedback.svg']
			);
		
    }
);
