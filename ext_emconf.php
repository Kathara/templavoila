<?php

########################################################################
# Extension Manager/Repository config file for ext: "templavoila"
#
# Auto generated 06-04-2006 22:21
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TemplaVoila!',
	'description' => 'An alternative template engine for TYPO3. Features include a mapping tool for creating templates, a new page module, the ability to create flexible content elements and an API for developers.',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => 'static_info_tables,cms,lang',
	'conflicts' => 'kb_tv_clipboard,templavoila_cw,eu_tradvoila',
	'constraints' => array(
		'depends' => array(
			'php' => '4.3.0-',
			'typo3' => '3.9.9-',
			'static_info_tables' => '',
			'cms' => '',
			'lang' => '',
		),
		'conflicts' => array(
			'kb_tv_clipboard' => '-0.1.0',
			'templavoila_cw' => '-0.1.0',
			'eu_tradvoila' => '-0.0.2',
		),
	),
	'priority' => '',
	'loadOrder' => '',
	'module' => 'cm1,cm2,mod1,mod2',
	'state' => 'beta',
	'internal' => 0,
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_templavoila/',
	'modify_tables' => 'pages,tt_content',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Robert Lemke',
	'author_email' => 'robert@typo3.org',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.0.0CVS',
	'_md5_values_when_last_written' => 'a:182:{s:10:".cvsignore";s:4:"d998";s:8:".project";s:4:"4844";s:9:"ChangeLog";s:4:"af19";s:28:"class.tx_templavoila_api.php";s:4:"2c5b";s:28:"class.tx_templavoila_cm1.php";s:4:"8a87";s:35:"class.tx_templavoila_extdeveval.php";s:4:"bc91";s:51:"class.tx_templavoila_handlestaticdatastructures.php";s:4:"c7f4";s:35:"class.tx_templavoila_htmlmarkup.php";s:4:"0f3e";s:30:"class.tx_templavoila_rules.php";s:4:"26e7";s:32:"class.tx_templavoila_tcemain.php";s:4:"db97";s:35:"class.tx_templavoila_xmlrelhndl.php";s:4:"10cc";s:21:"ext_conf_template.txt";s:4:"ae23";s:12:"ext_icon.gif";s:4:"cb59";s:17:"ext_localconf.php";s:4:"6ce5";s:15:"ext_php_api.dat";s:4:"212e";s:14:"ext_tables.php";s:4:"fdf3";s:14:"ext_tables.sql";s:4:"0e63";s:11:"icon_ds.gif";s:4:"0b15";s:14:"icon_ds__x.gif";s:4:"9991";s:11:"icon_to.gif";s:4:"de63";s:14:"icon_to__x.gif";s:4:"46d4";s:13:"locallang.xml";s:4:"d96e";s:20:"locallang_csh_ds.xml";s:4:"f5e1";s:23:"locallang_csh_intro.xml";s:4:"de0e";s:24:"locallang_csh_module.xml";s:4:"af60";s:23:"locallang_csh_pages.xml";s:4:"09de";s:20:"locallang_csh_pm.xml";s:4:"9007";s:20:"locallang_csh_to.xml";s:4:"228c";s:21:"locallang_csh_ttc.xml";s:4:"8139";s:16:"locallang_db.xml";s:4:"403e";s:7:"tca.php";s:4:"4151";s:11:"CVS/Entries";s:4:"126d";s:14:"CVS/Repository";s:4:"e708";s:8:"CVS/Root";s:4:"a7f0";s:13:"cm2/clear.gif";s:4:"cc11";s:15:"cm2/cm_icon.gif";s:4:"cb59";s:12:"cm2/conf.php";s:4:"a885";s:13:"cm2/index.php";s:4:"393c";s:17:"cm2/locallang.xml";s:4:"4ba7";s:15:"cm2/CVS/Entries";s:4:"8d7c";s:18:"cm2/CVS/Repository";s:4:"f991";s:12:"cm2/CVS/Root";s:4:"a7f0";s:32:"pi1/class.tx_templavoila_pi1.php";s:4:"68db";s:15:"pi1/CVS/Entries";s:4:"eb34";s:18:"pi1/CVS/Repository";s:4:"a09a";s:12:"pi1/CVS/Root";s:4:"a7f0";s:19:"cshimages/intro.png";s:4:"018d";s:21:"cshimages/CVS/Entries";s:4:"16c0";s:24:"cshimages/CVS/Repository";s:4:"ca1c";s:18:"cshimages/CVS/Root";s:4:"a7f0";s:37:"tests/tx_templavoila_api_testcase.php";s:4:"02f1";s:41:"tests/fixtures/fce_2col_datastructure.xml";s:4:"4751";s:37:"tests/fixtures/fce_2col_template.html";s:4:"febf";s:42:"tests/fixtures/fce_2col_templateobject.dat";s:4:"18ee";s:43:"tests/fixtures/main_typoscript_template.txt";s:4:"d737";s:47:"tests/fixtures/page_datastructure_onecolumn.xml";s:4:"7236";s:48:"tests/fixtures/page_datastructure_twocolumns.xml";s:4:"7c4a";s:33:"tests/fixtures/page_template.html";s:4:"1f16";s:48:"tests/fixtures/page_templateobject_onecolumn.dat";s:4:"4c2a";s:49:"tests/fixtures/page_templateobject_twocolumns.dat";s:4:"83a6";s:26:"tests/fixtures/CVS/Entries";s:4:"3faa";s:29:"tests/fixtures/CVS/Repository";s:4:"6242";s:23:"tests/fixtures/CVS/Root";s:4:"a7f0";s:17:"tests/CVS/Entries";s:4:"bd90";s:20:"tests/CVS/Repository";s:4:"d34f";s:14:"tests/CVS/Root";s:4:"a7f0";s:28:"res1/default_previewicon.gif";s:4:"edf8";s:16:"res1/CVS/Entries";s:4:"8023";s:19:"res1/CVS/Repository";s:4:"3585";s:13:"res1/CVS/Root";s:4:"a7f0";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"a216";s:14:"mod2/index.php";s:4:"6b72";s:18:"mod2/locallang.xml";s:4:"8fee";s:22:"mod2/locallang_mod.xml";s:4:"2a3f";s:26:"mod2/mapbody_animation.gif";s:4:"f085";s:26:"mod2/maphead_animation.gif";s:4:"2208";s:19:"mod2/moduleicon.gif";s:4:"2f0c";s:20:"mod2/new_tv_site.xml";s:4:"829b";s:16:"mod2/CVS/Entries";s:4:"7205";s:19:"mod2/CVS/Repository";s:4:"107c";s:13:"mod2/CVS/Root";s:4:"a7f0";s:12:"doc/TODO.txt";s:4:"0148";s:14:"doc/manual.sxw";s:4:"4bcf";s:15:"doc/CVS/Entries";s:4:"6057";s:18:"doc/CVS/Repository";s:4:"4324";s:12:"doc/CVS/Root";s:4:"a7f0";s:13:"cm1/clear.gif";s:4:"cc11";s:15:"cm1/cm_icon.gif";s:4:"cb59";s:24:"cm1/cm_icon_activate.gif";s:4:"cb59";s:12:"cm1/conf.php";s:4:"e51e";s:13:"cm1/index.php";s:4:"7f06";s:15:"cm1/item_at.gif";s:4:"8362";s:15:"cm1/item_co.gif";s:4:"3a12";s:15:"cm1/item_el.gif";s:4:"f8d6";s:15:"cm1/item_sc.gif";s:4:"e42d";s:17:"cm1/locallang.xml";s:4:"c434";s:15:"cm1/CVS/Entries";s:4:"908a";s:18:"cm1/CVS/Repository";s:4:"509f";s:12:"cm1/CVS/Root";s:4:"a7f0";s:44:"mod1/class.tx_templavoila_mod1_clipboard.php";s:4:"d580";s:47:"mod1/class.tx_templavoila_mod1_localization.php";s:4:"51ac";s:42:"mod1/class.tx_templavoila_mod1_sidebar.php";s:4:"8c77";s:50:"mod1/class.tx_templavoila_mod1_specialdoktypes.php";s:4:"c59b";s:42:"mod1/class.tx_templavoila_mod1_wizards.php";s:4:"ab0b";s:14:"mod1/clear.gif";s:4:"cc11";s:25:"mod1/clip_pastesubref.gif";s:4:"9260";s:17:"mod1/clip_ref.gif";s:4:"6812";s:19:"mod1/clip_ref_h.gif";s:4:"ac5e";s:13:"mod1/conf.php";s:4:"4001";s:26:"mod1/db_new_content_el.php";s:4:"9822";s:17:"mod1/greenled.gif";s:4:"3431";s:14:"mod1/index.php";s:4:"d60d";s:18:"mod1/locallang.xml";s:4:"37bd";s:36:"mod1/locallang_db_new_content_el.xml";s:4:"ba14";s:22:"mod1/locallang_mod.xml";s:4:"8332";s:22:"mod1/makelocalcopy.gif";s:4:"ce99";s:19:"mod1/moduleicon.gif";s:4:"9620";s:15:"mod1/redled.gif";s:4:"9933";s:16:"mod1/CVS/Entries";s:4:"685a";s:19:"mod1/CVS/Repository";s:4:"2fb1";s:13:"mod1/CVS/Root";s:4:"a7f0";s:15:"html_tags/a.gif";s:4:"afe4";s:18:"html_tags/area.gif";s:4:"18d0";s:15:"html_tags/b.gif";s:4:"b123";s:24:"html_tags/blockquote.gif";s:4:"99f0";s:18:"html_tags/body.gif";s:4:"87ff";s:16:"html_tags/br.gif";s:4:"e0b0";s:16:"html_tags/dd.gif";s:4:"0939";s:17:"html_tags/div.gif";s:4:"139d";s:16:"html_tags/dl.gif";s:4:"ff7a";s:16:"html_tags/dt.gif";s:4:"2dbd";s:16:"html_tags/em.gif";s:4:"c543";s:19:"html_tags/embed.gif";s:4:"e128";s:22:"html_tags/fieldset.gif";s:4:"0335";s:18:"html_tags/font.gif";s:4:"28bf";s:18:"html_tags/form.gif";s:4:"4da0";s:16:"html_tags/h1.gif";s:4:"e1e4";s:16:"html_tags/h2.gif";s:4:"23b7";s:16:"html_tags/h3.gif";s:4:"ccc3";s:16:"html_tags/h4.gif";s:4:"fadd";s:16:"html_tags/h5.gif";s:4:"3cae";s:16:"html_tags/h6.gif";s:4:"72d9";s:18:"html_tags/head.gif";s:4:"9048";s:16:"html_tags/hr.gif";s:4:"543e";s:15:"html_tags/i.gif";s:4:"89dc";s:20:"html_tags/iframe.gif";s:4:"e8b6";s:17:"html_tags/img.gif";s:4:"7a1b";s:19:"html_tags/input.gif";s:4:"3952";s:19:"html_tags/label.gif";s:4:"fe96";s:20:"html_tags/legend.gif";s:4:"ed85";s:16:"html_tags/li.gif";s:4:"b411";s:18:"html_tags/link.gif";s:4:"a93c";s:17:"html_tags/map.gif";s:4:"8aac";s:18:"html_tags/meta.gif";s:4:"7382";s:16:"html_tags/ol.gif";s:4:"173a";s:20:"html_tags/option.gif";s:4:"cd86";s:15:"html_tags/p.gif";s:4:"1261";s:17:"html_tags/pre.gif";s:4:"44bc";s:23:"html_tags/prototype.psd";s:4:"f154";s:20:"html_tags/script.gif";s:4:"b861";s:20:"html_tags/select.gif";s:4:"85b4";s:18:"html_tags/span.gif";s:4:"9291";s:20:"html_tags/strong.gif";s:4:"e4d8";s:19:"html_tags/style.gif";s:4:"253e";s:19:"html_tags/table.gif";s:4:"cf2c";s:19:"html_tags/tbody.gif";s:4:"7058";s:16:"html_tags/td.gif";s:4:"90ab";s:22:"html_tags/textarea.gif";s:4:"b575";s:16:"html_tags/th.gif";s:4:"6fd4";s:19:"html_tags/thead.gif";s:4:"5321";s:19:"html_tags/title.gif";s:4:"b867";s:16:"html_tags/tr.gif";s:4:"a0a7";s:15:"html_tags/u.gif";s:4:"7b3c";s:16:"html_tags/ul.gif";s:4:"a73a";s:21:"html_tags/CVS/Entries";s:4:"9000";s:24:"html_tags/CVS/Repository";s:4:"714e";s:18:"html_tags/CVS/Root";s:4:"a7f0";s:61:"func_wizards/class.tx_templavoila_referenceelementswizard.php";s:4:"5f9e";s:24:"func_wizards/CVS/Entries";s:4:"ee55";s:27:"func_wizards/CVS/Repository";s:4:"0852";s:21:"func_wizards/CVS/Root";s:4:"a7f0";}',
	'suggests' => array(
	),
);

?>