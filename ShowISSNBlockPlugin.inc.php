<?php

/**
 * @file plugins/blocks/showISSN/ShowISSNBlockPlugin.inc.php
 *
 * Copyright (c) 2022 University of Dhaka
 * Copyright (c) 2022 Md. Zahirul Haque
 * Email: zahirul.arb@gmail.com
 * Github: https://github.com/zahiruldu/show-issn
 * 
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class MakeSubmissionBlockPlugin
 * @ingroup ShowISSNBlockPlugin
 *
 * @brief Class for the "Show ISSN" block plugin
 */



import('lib.pkp.classes.plugins.BlockPlugin');

class ShowISSNBlockPlugin extends BlockPlugin {
	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return 'ISSN';
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return 'This plugin show the journal ISSN';
	}

	/**
	 * @copydoc BlockPlugin::getContents()
	 */
	function getContents($templateMgr, $request = null) {
		$context = $request->getContext();
		if (!$context) {
			return '';
		}
		$journal = $request->getJournal();
		$templateMgr->assign('journal',$journal);
		return parent::getContents($templateMgr);
	}


}
