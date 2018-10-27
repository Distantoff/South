{include 'file:chunks/base/head.tpl'}
{include 'file:chunks/base/header.tpl'}

{block 'main'}

{/block}

<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url([[++footerImage]]);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <div class="footer-logo my-4">
                                <img src="[[++logo]]" alt="">
                            </div>
                            <p>[[++info]]</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            [[pdoMenu?
                                &parents=`0`
                                &level=`1`
                                &outerClass=`useful-links-nav`
                            ]]
                        </div>
                    </div>

                    <!-- Single Footer Widget -->

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>[[++workTime1]]</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>[[++workTime2]]</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>[[++workTime3]]</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="assets/south/img/icons/phone-call.png" alt=""> [[++phone]]</h6>
                                <h6><img src="assets/south/img/icons/envelope.png" alt=""> [[++email]]</h6>
                                <h6><img src="assets/south/img/icons/location.png" alt=""> [[++address]]</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
    
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="assets/south/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/south/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/south/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/south/js/plugins.js"></script>
    <script src="assets/south/js/classy-nav.min.js"></script>
    <script src="assets/south/js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="assets/south/js/active.js"></script>

    {block 'add_js'}{/block}

</body>

</html>
