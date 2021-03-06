<!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:[[++email]]">[[++email]]</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="assets/south/img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:[[++phone]]">[[++phone]]</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="[[++site_url]]"><img src="[[++logo]]" alt="[[++site_name]]"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            [[pdoMenu?
                                &parents=`0`
                                &level=`1`
                            ]]

                            <!-- Search Form -->
                            <div class="south-search-form">
                                [[!SimpleSearchForm? 
                                    &tpl=`search`
                                    &landing=`22`
                                ]]
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->