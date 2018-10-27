<div class="col-12 col-lg-4">
    <div class="blog-sidebar-area">

        <!-- Search Widget -->
        <div class="search-widget-area mb-70">
        [[!SimpleSearchForm? 
            &tpl=`search`
            &landing=`22`
        ]]
        </div>
        <!-- Catagories Widget -->
        <div class="south-catagories-card mb-70">
            <h5>Categories</h5>
            <ul class="catagories-menu">
            [[pdoResources?
                &parents=`15`
                &depth=`0`
                &tpl=`@INLINE <li><a href="[[+uri]]">[[+pagetitle]]</a></li>`
            ]]
            </ul>
        </div>

        <!-- Catagories Widget -->
        <div class="featured-properties-slides owl-carousel">
        [[pdoResources?
        &parents=`5`
        &depth=`0`
        &limit=`3`
        &includeTVs=`houseImage,housePrice,houseArea,houseAddress,houseGarage,houseBathroom`
        &tvPrefix=``
        &tpl=`@CODE:
        <div class="single-featured-property">
            <!-- Property Thumbnail -->
            <div class="property-thumb">
                <img src="[[+houseImage]]" alt="">

                <div class="list-price">
                    <p>$[[+housePrice]]</p>
                </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
                <h5><a href="[[+uri]]">[[+pagetitle]]</a></h5>  
                <p class="location"><img src="assets/south/img/icons/location.png" alt="">[[+houseAddress]]</p>
                <p>[[+introtext]]</p>
                <div class="property-meta-data d-flex align-items-end justify-content-between">
                    <div class="new-tag">
                        <img src="assets/south/img/icons/new.png" alt="">
                    </div>
                    <div class="bathroom">
                        <img src="assets/south/img/icons/bathtub.png" alt="">
                        <span>[[+houseBathroom]]</span>
                    </div>
                    <div class="garage">
                        <img src="assets/south/img/icons/garage.png" alt="">
                        <span>[[+houseGarage]]</span>
                    </div>
                    <div class="space">
                        <img src="assets/south/img/icons/space.png" alt="">
                        <span>[[+houseArea]] sq ft</span>
                    </div>
                </div>
            </div>
        </div>
        `
        ]]
        </div>

    </div>
</div>