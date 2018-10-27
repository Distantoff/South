{extends 'file:templates/layout.tpl'}
{block 'main'}
{include 'file:chunks/base/breadcrumbs.tpl'}
<section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>[[++workTime1]]</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>[[++workTime2]]</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>[[++workTime3]]</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="assets/south/img/icons/phone-call.png" alt=""> [[++phone]]</h6>
                                <h6><img src="assets/south/img/icons/envelope.png" alt=""> [[++email]]</h6>
                                <h6><img src="assets/south/img/icons/location.png" alt=""> [[++address]]</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                    [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`@FILE chunks/contactForm.tpl`
                    &hooks=`email,FormItSaveForm`
                    &formFields=`name,email,phone`
                    &fieldNames=`name==Имя,email==E-mail,phone==Телефон`
                    &validate=`name:required,phone:required:isNumber,email:email:required,message:required`
                    &validationErrorMessage=`Что-то пошло не так, проверьте форму!!!`
                    &formName=`Форма со страницы контакты`
                    &successMessage=`Форма успешно отправлена`
                    &emailTo=`bamper25@gmail.com`
                    &emailSubject=`Письмо со страницы контакты`
                    &emailFromName=`От дяди Пети`
                    ]]
                    </div>
                </div>
            </div>
        </div>
    </section>
{/block}