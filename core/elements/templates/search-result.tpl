{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}
<section class="search-result section-padding-100">
<div class="container">
    <div class="row">
        <div class="col-12">
        [[!SimpleSearch?
        &ids=`1,2,3,5,15`
        &tpl=`searchResultCustom`
        &containerTpl=`searchContainer`
        ]]
        </div>
    </div>
</div>
</section>
{/block}