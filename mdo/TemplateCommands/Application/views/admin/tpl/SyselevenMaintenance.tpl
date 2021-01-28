[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]
<div class="container-fluid">
    <h1>Syseleven Loadbalancer Wartungsseite</h1>

    <p>Hier können Sie den Wartungsmodus im Loadbalancer aktivieren. Die IP Adresse von mdo wird dabei ausgenommen, alle anderen User erhalten die Wartungsseite, statt des OXID Shops und können <b>nicht</b> einkaufen.</p>

    <ul class="req">
        <h3>Status</h3>
        [{foreach from=$aMaintenanceStatus item=response key=ip}]
            <li class="clear"></li>
            <h2>[{$ip}]: </h2>
            [{foreach from=$response item=class key=vhost}]
                <li class="[{$class}]">[{$vhost}]</li>
            [{/foreach}]
            <li class="clear"></li>
            <br>
        [{/foreach}]
        <li class="clear"></li>
    </ul>

    <ul class="req">
        <li class="pass"> - [{oxmultilang ident="SYSELEVEN_DESCRIPTION_PASS"}]</li>
        <li class="pmin"> - [{oxmultilang ident="SYSELEVEN_DESCRIPTION_PMIN"}]</li>
        <li class="fail"> - [{oxmultilang ident="SYSELEVEN_DESCRIPTION_FAIL"}]</li>
        <li class="null"> - [{oxmultilang ident="SYSELEVEN_DESCRIPTION_NULL"}]</li>
    </ul>

    <form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
        [{$oViewConf->getHiddenSid()}]
        <input type="hidden" name="cl" value="SyselevenMaintenance">
        <input type="hidden" name="fnc" value="activate">
        <select name="vhost">
            [{foreach from=$aVhostOptions item=vhost key=ip}]
            <option value="[{$vhost}]">[{$vhost}]</option>
            [{/foreach}]
        </select>
        <input type="submit" name="activate" value="Wartungsmodus aktivieren" onClick="Javascript:document.myedit.fnc.value='activate';">
        <input type="submit" name="deactivate" value="Wartungsmodus deaktivieren" onClick="Javascript:document.myedit.fnc.value='deactivate';">
    </form>
</div>



[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]
