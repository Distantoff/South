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