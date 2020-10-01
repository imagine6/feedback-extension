<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback',
        'label' => 'fragebogen',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'schema1text_ddim1,schema1text_ddim2,schema1text_ddim3,schema1text_ddim4,schema1text_ddim5,schema2text_d',
        'iconfile' => 'EXT:feedback/Resources/Public/Icons/tx_feedback_domain_model_feedback.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, fragebogen, schema_typ, schema1text_ddim1, schema1text_ddim2, schema1text_ddim3, schema1text_ddim4, schema1text_ddim5, schema2text_d, schema1text_a, schema1text_bdim1, schema1text_edim1, schema1text_cdim1, schema1text_bdim2, schema1text_bdim3, schema1text_bdim4, schema1text_bdim5, schema1text_cdim2, schema1text_cdim3, schema1text_cdim4, schema1text_cdim5, schema1text_edim2, schema1text_edim3, schema1text_edim4, schema1text_edim5, schema2text_a, schema2text_b, schema2text_c, schema2text_edim1, schema2text_edim2, schema2text_edim3, schema2text_edim4, schema2text_edim5, schema2text_edim6, schema2text_fdim1, schema2text_fdim2, schema2text_fdim3, schema2text_fdim4, schema2text_fdim5, schema2text_fdim6',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden,
        fragebogen,
        schema_typ,
        --div--;Schema Typ 1,
        schema1text_a,
        schema1text_bdim1,
        schema1text_cdim1,
        schema1text_ddim1,
        schema1text_edim1,
        schema1text_bdim2,
        schema1text_cdim2,
        schema1text_ddim2,
        schema1text_edim2,
        schema1text_bdim3,
        schema1text_cdim3,
        schema1text_ddim3,
        schema1text_edim3,
        schema1text_bdim4,
        schema1text_cdim4,
        schema1text_ddim4,
        schema1text_edim4,
        schema1text_bdim5,
        schema1text_cdim5,
        schema1text_ddim5,
        schema1text_edim5,
        --div--;Schema Typ 2,
        schema2text_a,
        schema2text_b,
        schema2text_c,
        schema2text_d,
        schema2text_edim1,
        schema2text_fdim1,
        schema2text_edim2,
        schema2text_fdim2,
        schema2text_edim3,
        schema2text_fdim3,
        schema2text_edim4,
        schema2text_fdim4,
        schema2text_edim5,
        schema2text_fdim5,
        schema2text_edim6,
        schema2text_fdim6,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_feedback_domain_model_feedback',
                'foreign_table_where' => 'AND {#tx_feedback_domain_model_feedback}.{#pid}=###CURRENT_PID### AND {#tx_feedback_domain_model_feedback}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'fragebogen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.fragebogen',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'schema_typ' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema_typ',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Schema Typ 1 (Persönlichkeit / Intelligenz)', 0],
                    ['Schema Typ 2 (Interesse)', 1],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'schema1text_ddim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_ddim1',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema1text_ddim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_ddim2',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema1text_ddim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_ddim3',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema1text_ddim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_ddim4',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema1text_ddim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_ddim5',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema2text_d' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_d',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'schema1text_a' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_a',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_bdim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_bdim1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textbdim1_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_edim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_edim1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textedim1_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_cdim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_cdim1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textcdim1_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_bdim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_bdim2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textbdim2_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_bdim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_bdim3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textbdim3_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_bdim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_bdim4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textbdim4_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_bdim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_bdim5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textbdim5_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_cdim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_cdim2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textcdim2_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_cdim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_cdim3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textcdim3_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_cdim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_cdim4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textcdim4_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_cdim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_cdim5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textcdim5_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_edim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_edim2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textedim2_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_edim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_edim3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textedim3_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_edim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_edim4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textedim4_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema1text_edim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema1text_edim5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema1textedim5_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_a' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_a',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2texta_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_b' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_b',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textb_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_c' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_c',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textc_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim1_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim2_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim3_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim4_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim5_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_edim6' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_edim6',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textedim6_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim1' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim1_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim2',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim2_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim3',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim3_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim4',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim4_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim5',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim5_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'schema2text_fdim6' => [
            'exclude' => true,
            'label' => 'LLL:EXT:feedback/Resources/Private/Language/locallang_db.xlf:tx_feedback_domain_model_feedback.schema2text_fdim6',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_feedback_domain_model_textelement',
                'MM' => 'tx_feedback_feedback_schema2textfdim6_textelement_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],

    ],
];
