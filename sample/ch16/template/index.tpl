{* 共通ヘッダーの読み込み *}
{include file='_header.tpl' pagetitle="Smarty demo."}

{if $hello}
<h1>{$hello}</h1>
{/if}

<ul>
{foreach from=$demos item=demo}
    <li>{$demo}</li>
{/foreach}
</ul>

{* 共通フッターの読み込み *}
{include file='_footer.tpl'}