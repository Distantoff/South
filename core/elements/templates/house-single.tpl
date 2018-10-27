{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}
<!-- ##### Listings Content Area Start ##### -->
<section class="listings-content-wrapper section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Single Listings Slides -->
                <div class="single-listings-sliders owl-carousel">
                    [[getImageList?
                    &docid=`[[*id]]`
                    &tvname=`houseSlider`
                    &tpl=`@CODE:
                    <img src="[[+image]]" alt="">
                    `
                    ]]
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="listings-content">
                    <!-- Price -->
                    <div class="list-price">
                        <p>$[[*housePrice]]</p>
                    </div>
                    <h5>[[*pagetitle]]</h5>
                    <p class="location"><img src="assets/south/img/icons/location.png" alt="">[[*houseAddress]]</p>
                    <p>[[*content]]</p>
                    <!-- Meta -->
                    <div class="property-meta-data d-flex align-items-end">
                        <div class="new-tag">
                            <img src="assets/south/img/icons/new.png" alt="">
                        </div>
                        <div class="bathroom">
                            <img src="assets/south/img/icons/bathtub.png" alt="">
                            <span>[[*houseBathroom]]</span>
                        </div>
                        <div class="garage">
                            <img src="assets/south/img/icons/garage.png" alt="">
                            <span>[[*houseGarage]]</span>
                        </div>
                        <div class="space">
                            <img src="assets/south/img/icons/space.png" alt="">
                            <span>[[*houseArea]] sq ft</span>
                        </div>
                    </div>
                    <!-- Core Features -->
                    <ul class="listings-core-features d-flex align-items-center">                 
                    [[getImageList?
                    &tvname=`houseFeatures`
                    &tpl=`@CODE:
                    <li><i class="fa fa-check" aria-hidden="true"></i> [[+text]]</li>
                    `
                    ]]
                        
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contact-realtor-wrapper">
                    <div class="realtor-info">
                        <img src="assets/south/img/bg-img/listing.jpg" alt="">
                        <div class="realtor---info">
                        [[getImageList?
                        &tvname=`team`
                        &docid=`2`
                        &limit=`1`
                        &tpl=`@CODE:
                        <h2>[[+teamName]]</h2>
                        <p>[[+teamPosition]]</p>
                        <h6><img src="assets/south/img/icons/phone-call.png" alt=""> [[+teamPhone]]</h6>
                        <h6><img src="assets/south/img/icons/envelope.png" alt=""> [[+teamEmail]]</h6>
                        `
                        ]]
                        </div>
                        <div class="realtor--contact-form">
                        [[!AjaxForm?
                        &snippet=`FormIt`
                        &form=`@CODE:
                        <form action="" method="post">
                            <div class="form-group">
                                <input id="realtor-name" type="text" name="realtor-name" class="form-control" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="realtor-number" id="realtor-number" placeholder="Your Number" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="realtor-email" id="realtor-email" placeholder="Your Mail" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" name="realtor-message" id="realtor-message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                            </div>
                            <input type="hidden" name="house" value="[[*pagetitle]]">
                            <button type="submit" class="btn south-btn">Send Message</button>
                        </form>
                        `
                        &hooks=`email,FormItSaveForm`
                        &formFields=`realtor-name,realtor-email,realtor-number,house`
                        &fieldNames=`realtor-name==Имя,realtor-email==E-mail,realtor-number==Телефон,house==Дом`
                        &validate=`realtor-name:required,realtor-number:required:isNumber,realtor-email:email:required,message:required`
                        &validationErrorMessage=`Что-то пошло не так, проверьте форму!!!`
                        &formName=`Форма со страницы дома`
                        &successMessage=`Форма успешно отправлена`
                        &emailTo=`bamper25@gmail.com`
                        &emailSubject=`Письмо со страницы дома`
                        &emailFromName=`От дяди Пети`
                        ]]  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Maps -->
        <div class="row">
            <div class="col-12">
                <div class="listings-maps mt-100">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Listings Content Area End ##### -->
{/block}
{block 'add_js'}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    [[*houseMap:JSONtoChunk=`houseMap`]]
{/block}