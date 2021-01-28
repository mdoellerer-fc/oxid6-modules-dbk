[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<script type="text/javascript">
<!--
function changeFnc( fncName )
{
	var selectField = document.querySelector('.select-channel');
	var titleValue = document.querySelector('[name="editval[fctbone_channels__fcchannelname]"]');
	titleValue.value = selectField.options[selectField.selectedIndex].text;

    var langvar = document.myedit.elements['fnc'];
    if (langvar != null )
        langvar.value = fncName;
}

//-->
</script>
[{if isset($shop->selflink)}]
	[{assign var="sFCSelfLink" value=$shop->selflink}]
[{else}]
	[{assign var="sFCSelfLink" value=$oViewConf->getSelfLink()}]
[{/if}]

[{assign var="sFCClassName" value="fctradebyteone_channels_main"}]
<form name="transfer" id="transfer" action="[{$sFCSelfLink}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$sFCClassName}]">
</form>

<form name="myedit" id="myedit" action="[{$sFCSelfLink}]" method="post">
[{if file_exists('_formparams.tpl')}]
	[{include file="_formparams.tpl" cl=$sFCClassName lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="save" language=$actlang editlanguage=$actlang assign="sFCFormParams"}]
[{else}]
	[{$shop->hiddensid}]
    <input type="hidden" name="cl" value="[{$sFCClassName}]">
	<input type="hidden" name="fnc" value="">
	<input type="hidden" name="oxid" value="[{$oxid}]">
	<input type="hidden" name="editval[fctbone_channels__oxid]" value="[{$oxid}]">
[{/if}]	
	<table cellspacing="0" cellpadding="0" border="0" width="98%">
	<tr>
	    <td valign="top" class="edittext" width="50%">		
			<table cellspacing="2" cellpadding="0" border="0">

				<tr>
					<td class="edittext" width="120">

					</td>
					<td class="edittext">
						<input type="hidden" class="editinput" size="40" name="editval[fctbone_channels__fcchannelname]" value="[{$edit->fctbone_channels__fcchannelname->value}]" >
					</td>
				</tr>

	            [{if $oxid != '-1'}]
				<tr>
					<td class="edittext" width="120">
						[{oxmultilang ident="FCTBONE_CHANNEL_MAIN_CHANNEL"}]
					</td>
					<td class="edittext">
						<select class="select-channel" name="editval[fctbone_channels__fcchannelid]" disabled="disabled">
							[{foreach from=$oView->fcGetChannels() item=aTBChannel}]
							[{assign var="sChannelNameLangIdent" value="SHOP_MODULE_"|cat:$aTBChannel.confBool}]
							<option value="[{$aTBChannel.ident}]" [{if $edit->fctbone_channels__fcchannelid->value == $aTBChannel.ident}]selected[{/if}]>[{$aTBChannel.title}]</option>
							[{/foreach}]
						</select>
					</td>
				</tr>
				<tr>
					<td class="edittext" width="120" height="30">
						[{oxmultilang ident="FCTBONE_CHANNEL_MAIN_ACTIVE_CHECK"}]
					</td>
					<td class="edittext">
						<input class="edittext" type="hidden" name="editval[fctbone_channels__fcchannelactive]" value='0'>
						<input class="edittext" type="checkbox" name="editval[fctbone_channels__fcchannelactive]" value='1' [{if $edit->fctbone_channels__fcchannelactive->value == 1}]checked[{/if}] [{ $readonly }] />
					</td>
				</tr>
				<tr>
					<td class="edittext" width="120" height="30">
						[{oxmultilang ident="FCTBONE_CHANNEL_MAIN_UVP_CHECK"}]
					</td>
					<td class="edittext">
						<input class="edittext" type="hidden" name="editval[fctbone_channels__fcchannelusesuvp]" value='0'>
						<input class="edittext" type="checkbox" name="editval[fctbone_channels__fcchannelusesuvp]" value='1' [{if $edit->fctbone_channels__fcchannelusesuvp->value == 1}]checked[{/if}] [{ $readonly }] />
					</td>
	            </tr>
				[{else}]
				<tr>
					<td class="edittext" width="120">
						[{oxmultilang ident="FCTBONE_CHANNEL_MAIN_CHANNEL"}]
					</td>
					<td class="edittext">
						<select class="select-channel" name="editval[fctbone_channels__fcchannelid]" >
							[{foreach from=$oView->fcGetChannels() item=aTBChannel}]
							[{assign var="sChannelNameLangIdent" value="SHOP_MODULE_"|cat:$aTBChannel.confBool}]
							<option value="[{$aTBChannel.ident}]" [{if $edit->fctbone_channels__fcchannelid->value == $aTBChannel.ident}]selected[{/if}]>[{$aTBChannel.title}]</option>
							[{/foreach}]
						</select>
					</td>
				</tr>
	            [{/if}]
				<tr>
					<td class="edittext"></td>
					<td class="edittext"><br>
						<input type="submit" class="edittext" name="save" value="[{oxmultilang ident="GENERAL_SAVE"}]" [{$readonly}] onClick="Javascript:changeFnc('save');">
					</td>
				</tr>				
			</table>
	    </td>
	    <!-- Anfang rechte Seite -->
		 <td valign="top" class="edittext" align="left" style="width:50%;height:99%;padding-left:5px;padding-bottom:30px;padding-top:10px;">			
	    </td>
	    <!-- Ende rechte Seite -->
	    </tr>
	</table>
</form>
<br/><br/><br/>
<div align="right">
	<a href="http://www.fatchip.de" target="_blank">
		<img alt="powered by FATCHIP" border="0" src="[{$oView->fcGetModuleImgUrl()}]/powered_by_fatchip_png24_grau.png" />
	</a>
</div>
[{include file="fctradebyteone_bottomnavi.tpl"}]
[{include file="bottomitem.tpl"}]
