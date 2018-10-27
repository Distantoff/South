{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}

<!-- ##### About Content Wrapper Start ##### -->
<section class="about-content-wrapper section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>[[*longtitle]]</h2>
                    <p>[[*aboutText]]</p>
                </div>
                <div class="about-content">
                    <img class="wow fadeInUp" data-wow-delay="350ms" src="[[*aboutImage]]" alt="">
                    <p class="wow fadeInUp" data-wow-delay="450ms">[[*content]]</p>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                    <h2>Featured Properties</h2>
                    <p>Suspendisse dictum enim sit amet libero</p>
                </div>

                <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">
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
    </div>
</section>
<!-- ##### About Content Wrapper End ##### -->

<!-- ##### Call To Action Area Start ##### -->
<section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url([[pdoField? &id=`1` &field=`image`]])">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <div class="cta-content text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="300ms">[[pdoField? &id=`1` &field=`heading`]]</h2>
                    <h6 class="wow fadeInUp" data-wow-delay="400ms">[[pdoField? &id=`1` &field=`heading2`]]</h6>
                    <a href="[[pdoField? &id=`1` &field=`buttonLink`]]" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">[[pdoField? &id=`1` &field=`buttonText`]]</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action Area End ##### -->

{include 'file:chunks/team.tpl'}

{/block}