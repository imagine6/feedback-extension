#
# Table structure for table 'tx_feedback_domain_model_feedback'
#
CREATE TABLE tx_feedback_domain_model_feedback (

	fragebogen int(11) DEFAULT '0' NOT NULL,
	schema_typ int(11) DEFAULT '0' NOT NULL,
	schema1text_ddim1 text,
	schema1text_ddim2 text,
	schema1text_ddim3 text,
	schema1text_ddim4 text,
	schema1text_ddim5 text,
	schema2text_d text,
	schema1text_a int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_bdim1 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_edim1 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_cdim1 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_bdim2 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_bdim3 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_bdim4 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_bdim5 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_cdim2 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_cdim3 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_cdim4 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_cdim5 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_edim2 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_edim3 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_edim4 int(11) unsigned DEFAULT '0' NOT NULL,
	schema1text_edim5 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_a int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_b int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_c int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim1 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim2 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim3 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim4 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim5 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_edim6 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim1 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim2 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim3 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim4 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim5 int(11) unsigned DEFAULT '0' NOT NULL,
	schema2text_fdim6 int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_feedback_domain_model_textelement'
#
CREATE TABLE tx_feedback_domain_model_textelement (

	titel varchar(255) DEFAULT '' NOT NULL,
	txt text

);

#
# Table structure for table 'tx_feedback_feedback_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textbdim1_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textbdim1_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textedim1_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textedim1_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textcdim1_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textcdim1_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textbdim2_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textbdim2_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textbdim3_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textbdim3_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textbdim4_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textbdim4_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textbdim5_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textbdim5_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textcdim2_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textcdim2_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textcdim3_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textcdim3_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textcdim4_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textcdim4_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textcdim5_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textcdim5_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textedim2_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textedim2_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textedim3_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textedim3_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textedim4_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textedim4_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema1textedim5_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema1textedim5_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2texta_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2texta_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textb_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textb_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textc_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textc_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim1_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim1_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim2_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim2_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim3_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim3_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim4_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim4_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim5_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim5_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textedim6_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textedim6_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim1_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim1_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim2_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim2_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim3_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim3_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim4_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim4_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim5_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim5_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_feedback_feedback_schema2textfdim6_textelement_mm'
#
CREATE TABLE tx_feedback_feedback_schema2textfdim6_textelement_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
