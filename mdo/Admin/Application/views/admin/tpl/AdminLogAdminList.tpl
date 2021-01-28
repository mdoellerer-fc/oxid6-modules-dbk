[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign box="list"}]
[{assign var="where" value=$oView->getListFilter()}]

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

    <form name="search" id="search" action="[{ $oViewConf->getSelfLink() }]" method="post">
        [{include file="_formparams.tpl" cl="AdminLogAdminList" lstrt=$lstrt actedit=$actedit oxid=$oxid fnc="" language=$actlang editlanguage=$actlang}]
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <colgroup>
                [{block name="admin_usergroup_list_colgroup"}]
            <col><col><col><col><col><col><col>
                [{/block}]
            </colgroup>
            <tr class="listitem">
                [{block name="admin_mdo_admin_log_list_filter"}]
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                            <input class="listedit" type="text" size="16" maxlength="12" name="where[mdo_admin_log][setting_name]" value="[{ $where.mdo_admin_log.setting_name }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                        <input class="listedit" type="text" size="16" maxlength="100" name="where[mdo_admin_log][old_value]" value="[{ $where.mdo_admin_log.old_value }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                            <input class="listedit" type="text" size="16" maxlength="100" name="where[mdo_admin_log][new_value]" value="[{ $where.mdo_admin_log.new_value }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                            <input class="listedit" type="text" size="16" maxlength="12" name="where[mdo_admin_log][time_of_change]" value="[{ $where.mdo_admin_log.time_of_change }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                            <input class="listedit" type="text" size="16" maxlength="100" name="where[mdo_admin_log][user_responsible]" value="[{ $where.mdo_admin_log.user_responsible }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                    <div class="r1">
                        <div class="b1">
                            <div class="find">
                                <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
                            </div>
                            <input class="listedit" type="text" size="16" maxlength="100" name="where[mdo_admin_log][domain]" value="[{ $where.mdo_admin_log.domain }]">
                        </div>
                    </div>
                </td>
                <td valign="top" class="listfilter first" height="20">
                </td>
                [{/block}]
            </tr>

            <tr>
                [{block name="admin_mdo_admin_log_list_sorting"}]
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'setting_name', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_setting_name" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'old_value', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_old_value" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'new_value', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_new_value" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'time_of_change', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_time_of_change" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'user_responsible', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_user_responsible" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'domain', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_domain" }]</a></td>
                <td class="listheader first" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'mdo_admin_log', 'path', 'asc');document.search.submit();" class="listheader">[{ oxmultilang ident="mdo_admin_log_path" }]</a></td>
                [{/block}]
            </tr>

            [{assign var="blWhite" value=""}]
            [{assign var="_cnt" value=0}]
            [{foreach from=$mylist item=listitem}]
            [{assign var="_cnt" value=$_cnt+1}]
            <tr id="row.[{$_cnt}]">
                [{block name="admin_mdo_admin_log_list_item"}]
                [{if $listitem->blacklist == 1}]
                [{assign var="listclass" value=listitem3 }]
                [{else}]
                [{assign var="listclass" value=listitem$blWhite }]
                [{/if}]
                [{if $listitem->getId() == $oxid }]
                [{assign var="listclass" value=listitem4 }]
                [{/if}]
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__setting_name->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__old_value->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__new_value->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__time_of_change->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__user_responsible->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__domain->value }]</a></div></td>
                <td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a class="[{ $listclass}]">[{ $listitem->mdo_admin_log__path->value }]</a></div></td>

                </td>
                [{/block}]
            </tr>
            [{if $blWhite == "2" }]
            [{assign var="blWhite" value=""}]
            [{else }]
            [{assign var="blWhite" value="2"}]
            [{/if }]
            [{/foreach }]
            [{include file="pagenavisnippet.tpl" colspan="4"}]
        </table>
    </form>
</div>

[{include file="pagetabsnippet.tpl"}]

</body>
</html>