<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
    <title>[{oxmultilang ident="GENERAL_ADMIN_TITLE_1"}]</title>
</head>

<!-- frames -->
[{if method_exists($oViewConf, 'getSelfLink')}]
    <frameset  rows="40%,*" border="0" onload="document.getElementById('edit').src='[{$oViewConf->getSelfLink()}]&[{$editurl}][{if $oxid}]&oxid=[{$oxid}][{/if}]';">
        <frame src="[{$oViewConf->getSelfLink()}]&[{$listurl}][{if $oxid}]&oxid=[{$oxid}][{/if}]" name="list" id="list" frameborder="0" scrolling="auto" noresize marginwidth="0" marginheight="0">
        <frame src="" name="edit" id="edit" frameborder="0" scrolling="auto" noresize marginwidth="0" marginheight="0">
    </frameset>
    [{else}][{* Older OXID support *}]
    <frameset  rows="40%,*" border="0" onload="top.loadEditFrame('[{$shop->selflink}]&[{$editurl}][{if $oxid}]&oxid=[{$oxid}][{/if}]');">
        <frame src="[{$shop->selflink}]&[{$listurl}][{if $oxid}]&oxid=[{$oxid}][{/if}]" name="list" id="list" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
        <frame src="" name="edit" id="edit" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
    </frameset>
    [{/if}]

</html>