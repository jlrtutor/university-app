<section class="content-header">
    <h1>{$_SECTION_TITLE|default:''} <small>{$_SECTION_DESCRIPTION|default:''}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> {$_LANG.Header.home}</a></li>
        {if isset($_SECTION_MODULE)}
        <li><a href="{$_SECTION_MODULE_URL|default:'#'}">{$_SECTION_MODULE|default:''}</a></li>
        {/if}
        <li class="active">{$_SECTION_ACTIVITY|default:''}</li>
    </ol>
</section>