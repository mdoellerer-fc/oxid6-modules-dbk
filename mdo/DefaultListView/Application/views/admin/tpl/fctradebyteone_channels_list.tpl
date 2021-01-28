[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]
[{if method_exists($oView, 'getListFilter')}]
[{assign var="where" value=$oView->getListFilter()}]
[{/if}]
[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<script type="text/javascript">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    [{ if $updatelist == 1}]
        top.oxid.admin.updateList('[{ $oxid }]');
    [{ /if}]
}
//-->
</script>

<div id="liste">

[{if isset($shop->selflink)}]
	[{assign var="sFCSelfLink" value=$shop->selflink }]
[{else}]
	[{assign var="sFCSelfLink" value=$oViewConf->getSelfLink() }]
[{/if}]
[{assign var="sFCClassName" value="fctradebyteone_channels_list"}]
<form name="search" id="search" action="[{$sFCSelfLink}]" method="post">
[{if file_exists('_formparams.tpl')}]
	[{include file="_formparams.tpl" cl=$sFCClassName lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="" language=$actlang editlanguage=$actlang assign="sFCFormParams"}]
[{else}]
	[{ $shop->hiddensid }]
    <input type="hidden" name="cl" value="[{$sFCClassName}]">
    <input type="hidden" name="lstrt" value="[{ $lstrt }]">
    <input type="hidden" name="sort" value="[{ $sort }]">
    <input type="hidden" name="actedit" value="[{ $actedit }]">
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="fnc" value="">
[{/if}]

<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <colgroup>
        <col width="5%">
        <col width="50%">
        <col width="5%">
        <col width="36%">
        <col width="4%">
    </colgroup>
    <tr class="listitem">
        <td valign="top" class="listfilter first">
            <div class="r1"><div class="b1">
        </td>
	    <td valign="top" class="listfilter ">
	        <div class="r1"><div class="b1">
	        <input class="listedit" type="text" size="50" maxlength="128" name="[{if method_exists($oView, 'getListFilter')}]where[fctbone_channels][fcchannelname][{else}]where[fctbone_channels.fcchannelname][{/if}]" value="[{if isset($where->fctbone_channels__fcchannelname) }][{$where->fctbone_channels__fcchannelname}][{else}][{$where.fctbone_channels.fcchannelname}][{/if}]">
	        </div></div>
	    </td>
        <td valign="top" class="listfilter ">
            <div class="r1"><div class="b1">
        </td>
	    <td valign="top" class="listfilter" colspan="2">
	        <div class="r1"><div class="b1">
	        <input class="listedit" type="text" size="50" maxlength="128" name="[{if method_exists($oView, 'getListFilter')}]where[fctbone_channels][fcchannelid][{else}]where[fctbone_channels.fcchannelid][{/if}]" value="[{if isset($where->fctbone_channels__fcchannelid) }][{$where->fctbone_channels__fcchannelid}][{else}][{$where.fctbone_channels.fcchannelid}][{/if}]">
	        <div class="find"><input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]"></div>        
	        </div></div>
	    </td>
</tr>

<tr>
    <td class="listheader first" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'fctbone_channels', 'fcchannelactive', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="FCTBONE_LIST_ACTIVE" }]</a></td>
    <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'fctbone_channels', 'fcchannelname', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="FCTBONE_LIST_TITLE" }]</a></td>
    <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'fctbone_channels', 'fcchannelusesuvp', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="FCTBONE_LIST_USE_UVP" }]</a></td>
    <td class="listheader" height="15" colspan="2">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'fctbone_channels', 'fcchannelid', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="FCTBONE_LIST_CHANNELID" }]</a></td>
</tr>

[{assign var="blWhite" value=""}]
[{assign var="_cnt" value=0}]
[{foreach from=$mylist item=listitem}]
    [{assign var="_cnt" value=$_cnt+1}]
    <tr id="row.[{$_cnt}]">

    [{ if $listitem->blacklist == 1}]
        [{assign var="listclass" value=listitem3 }]
    [{ else}]
        [{assign var="listclass" value=listitem$blWhite }]
    [{ /if}]
    [{ if $listitem->fctbone_channels__oxid->value == $oxid }]
        [{assign var="listclass" value=listitem4 }]
    [{ /if}]
    [{assign var="sChannelNameLangIdent" value="SHOP_MODULE_"|cat:$oView->fcGetChannelConfigParamName($listitem->fctbone_channels__fcchannelid->value)}]
    <td valign="top" class="[{$listclass}][{if $listitem->fctbone_channels__fcchannelactive->value == 1}] active[{/if}]" height="15"><div class="listitemfloating">&nbsp</a></div></td>
    <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating">&nbsp;<a href="Javascript:top.oxid.admin.editThis('[{ $listitem->fctbone_channels__oxid->value}]');" class="[{ $listclass}]">[{ if !$listitem->fctbone_channels__fcchannelname->value }]-[{ oxmultilang ident="GENERAL_NONAME" }]-[{else}][{ $listitem->fctbone_channels__fcchannelname->value }][{/if}]</a></div></td>
    <td valign="top" class="[{$listclass}][{if $listitem->fctbone_channels__fcchannelusesuvp->value == 1}] active[{/if}]" height="15"><div class="listitemfloating">&nbsp</a></div></td>
    <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating">&nbsp;<a href="Javascript:top.oxid.admin.editThis('[{ $listitem->fctbone_channels__oxid->value}]');" class="[{ $listclass}]">[{ if !$listitem->fctbone_channels__fcchannelid->value }]-[{ oxmultilang ident="GENERAL_NONAME" }]-[{else}][{ $listitem->fctbone_channels__fcchannelid->value }] ([{ oxmultilang ident=$sChannelNameLangIdent noerror="true" alternative='-'}]) [{/if}]</a></div></td>
    <td class="[{ $listclass}]">
      [{if !$readonly}]
          <a href="Javascript:top.oxid.admin.deleteThis('[{ $listitem->fctbone_channels__oxid->value }]');" class="delete" id="del.[{$_cnt}]" title="" [{include file="help.tpl" helpid=item_delete}]></a>
      [{/if}]
    </td>
</tr>
[{if $blWhite == "2"}]
[{assign var="blWhite" value=""}]
[{else}]
[{assign var="blWhite" value="2"}]
[{/if}]
[{/foreach}]
[{include file="pagenavisnippet.tpl" colspan="5"}]
</table>
</form>
</div>

[{include file="pagetabsnippet.tpl"}]


<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "[{$actshopobj->oxshops__oxname->getRawValue()|oxaddslashes}]";
    parent.parent.sMenuItem    = "";
    parent.parent.sMenuSubItem = "";
    parent.parent.sWorkArea    = "[{$_act}]";
    parent.parent.setTitle();
}
</script>
</body>
</html>
