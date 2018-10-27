{extends 'file:templates/layout.tpl'}

{block 'main'}
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        [[getImageList?
        &tvname=`hero_slider`
        &tpl=`@CODE:
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url([[+image]]);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">[[+description]]</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
        ]]
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Properties Area Start ##### -->
<section class="featured-properties-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>Featured Properties</h2>
                    <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                </div>
            </div>
        </div>
        <div class="row">
        [[pdoResources?
        &parents=`5`
        &depth=`0`
        &limit=`6`
        &includeTVs=`houseImage,housePrice,houseArea,houseAddress,houseGarage,houseBathroom`
        &tvPrefix=``
        &tpl=`@CODE:
        <!-- Single Featured Property -->
        <div class="col-12 col-md-6 col-xl-4">
            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms"">
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
        </div>
        `
        ]]
        </div>
    </div>
</section>
<!-- ##### Featured Properties Area End ##### -->

<!-- ##### Call To Action Area Start ##### -->
<section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url([[*image]])">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <div class="cta-content text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="300ms">[[*heading]]</h2>
                    <h6 class="wow fadeInUp" data-wow-delay="400ms">[[*heading2]]</h6>
                    <a href="[[*buttonLink]]" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">[[*buttonText]]</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Call To Action Area End ##### -->

<!-- ##### Testimonials Area Start ##### -->
<section class="south-testimonials-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                    <h2>[[*titleTestimonials]]</h2>
                    <p>[[*descriptionTestimonials]]</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
                    [[getImageList?
                    &docid=`[[*id]]`
                    &tvname=`testimonial`
                    &tpl=`@CODE:
                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide text-center">
                        <h5>[[+title]]</h5>
                        <p>[[+text]]</p>

                        <div class="testimonial-author-info">
                            <img src="[[+avatar]]" alt="">
                            <p>[[+name]], <span>[[+position]]</span></p>
                        </div>
                    </div>
                    `
                    ]]
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonials Area End ##### -->

<!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <img src="assets/south/img/icons/prize.png" alt="">
                <h2>[[*name]]</h2>
                <p>[[*position]]</p>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">[[*heading]]</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="assets/south/img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                <h6><img src="assets/south/img/icons/envelope.png" alt=""> office@template.com</h6>
            </div>
            <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                <img src="assets/south/img/core-img/signature.png" alt="asasa">
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="[[*imageSection]]" alt="asasasa">
        </div>
    </section>
<!-- ##### Editor Area End ##### -->

{/block}
