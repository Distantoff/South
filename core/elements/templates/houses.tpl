{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}

[[!mFilter2?
&parents=`5`
&limit=`6`
&tplOuter=`mFilter2.outer`
&tpls=`mSearch2.row`
&includeTVs=`houseImage,housePrice,houseArea,houseAddress,houseGarage,houseBathroom`
&filters=`
    tv|houseGarage,
    tv|houseBathroom,
    tv|housePrice:number,
    tv|houseArea:number,
`
&tplFilter.outer.tv|houseGarage=`mFilter2.filter.select`
&tplFilter.row.tv|houseGarage=`mFilter2.filter.option`
&tplFilter.outer.tv|houseBathroom=`mFilter2.filter.select`
&tplFilter.row.tv|houseBathroom=`mFilter2.filter.option`
&tplFilter.outer.tv|housePrice=`mFilter2.filter.slider`
&tplFilter.row.tv|housePrice=`mFilter2.filter.number`
&tplFilter.outer.tv|houseArea=`mFilter2.filter.slider`
&tplFilter.row.tv|houseArea=`mFilter2.filter.number`
&tplPageWrapper=`@CODE:
<nav aria-label="Page navigation">
    <ul class="pagination">[[+prev]][[+pages]][[+next]]</ul>
</nav>
`
&tplPage=`@INLINE <li class="page-item"><a href="[[+href]]" class="page-link">[[+pageNo]]</a></li>`
&tplPageActive=`@INLINE <li class="active page-item"><a href="[[+href]]" class="page-link active">[[+pageNo]]</a></li>`
&tplPagePrevEmpty=``
&tplPageNextEmpty=``
&tplPagePrev=``
&tplPageNext=``
]]


{/block}