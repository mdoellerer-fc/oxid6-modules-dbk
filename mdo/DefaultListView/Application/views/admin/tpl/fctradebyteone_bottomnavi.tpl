</div>
<div class="actions">
[{strip}]
<ul>
[{if !$disablenew}]
	[{* FATCHIP TD.ONE BUTTON BEGIN *}]
	[{assign var="firstitem" value=false}]
	[{if $bottom_buttons->fctradebyteone_channeltags_new}]
	<li><a [{if !$firstitem}]class="firstitem"[{assign var="firstitem" value="1"}][{/if}] id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">[{ oxmultilang ident="fctradebyteone_channeltags_new" }]</a> |</li>
	[{/if}]
	[{if $bottom_buttons->fctradebyteone_channels_new}]
	<li><a [{if !$firstitem}]class="firstitem"[{assign var="firstitem" value="1"}][{/if}] id="btn.new" href="#" onClick="Javascript:top.oxid.admin.editThis( -1 );return false" target="edit">[{ oxmultilang ident="fctradebyteone_channels_new" }]</a> |</li>
	[{/if}]
	[{* FATCHIP TD.ONE BUTTON END *}]
[{/if}]
</ul>
[{/strip}]
</div>