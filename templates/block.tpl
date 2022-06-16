{**
* plugins/blocks/showISSN/templates/block.tpl
* Copyright (c) 2022 University of Dhaka
* Copyright (c) 2022 Md. Zahirul Haque
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* Common site sidebar menu -- "Display ISSN" block.
*}
<div class="pkp_block block_show_issn">
	<h2 class="pkp_screen_reader">
		ISSN
	</h2>

	<div class="content">
		{if $journal->getData('onlineIssn')}
		<div class="issn">
			<div class="label">ISSN: </div>
			<div class="value">{$journal->getData('onlineIssn')|escape}</div>
		</div>
		{elseif $journal->getData('printIssn')}
		<div class="issn" >
			<div class="label">ISSN: </div>
			<div class="value">{$journal->getData('printIssn')|escape}</div>
		</div>
		{/if}
	</div>
</div>