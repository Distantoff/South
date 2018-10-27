<!-- ##### Meet The Team Area Start ##### -->
<section class="meet-the-team-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>[[*titleTeam]]</h2>
                    <p>[[*descriptionTeam]]</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            [[getImageList?
            &tvname=`team`
            &tpl=`@CODE:
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb">
                        <img src="[[+teamImage]]" alt="">
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info">
                        <div class="section-heading">
                            <img src="assets/south/img/icons/prize.png" alt="">
                            <h2>[[+teamName]]</h2>
                            <p>[[+teamPosition]]</p>
                        </div>
                        <div class="address">
                            <h6><img src="assets/south/img/icons/phone-call.png" alt=""> [[+teamPhone]]</h6>
                            <h6><img src="assets/south/img/icons/envelope.png" alt=""> [[+teamEmail]]</h6>
                        </div>
                    </div>
                </div>
            </div>
            `
            ]]
        </div>
    </div>
</section>
<!-- ##### Meet The Team Area End ##### -->