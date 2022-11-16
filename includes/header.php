<header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php" aria-label="Front">
            <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo" src="assets/svg/logos-light/logo.png" alt="Logo"
                data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini" src="assets/svg/logos-light/logo-short.svg" alt="Logo"
                data-hs-theme-appearance="dark">
        </a>
        <!-- End Logo -->

        <div class="navbar-nav-wrap-content-start">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Search Form -->
            <div class="dropdown ms-2">
                <!-- Input Group -->
                <div class="d-none d-lg-block">
                    <div
                        class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                        </div>

                        <input type="search" class="js-form-search form-control" placeholder="Rechercher quelque chose"
                            aria-label="Search in front" data-hs-form-search-options='{
                   "clearIcon": "#clearSearchResultsIcon",
                   "dropMenuElement": "#searchDropdownMenu",
                   "dropMenuOffset": 20,
                   "toggleIconOnFocus": true,
                   "activeClass": "focus"
                 }'>
                        <a class="input-group-append input-group-text" href="javascript:;">
                            <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                        </a>
                    </div>
                </div>

                <button
                    class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none"
                    type="button" data-hs-form-search-options='{
                   "clearIcon": "#clearSearchResultsIcon",
                   "dropMenuElement": "#searchDropdownMenu",
                   "dropMenuOffset": 20,
                   "toggleIconOnFocus": true,
                   "activeClass": "focus"
                 }'>
                    <i class="bi-search"></i>
                </button>
                <!-- End Input Group -->

                <!-- Card Search Content -->
               
                <!-- End Card Search Content -->

            </div>

            <!-- End Search Form -->
        </div>

        <div class="navbar-nav-wrap-content-end">
            <!-- Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Notification -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside" data-bs-dropdown-animation>
                            <i class="bi-bell"></i>
                            <span class="btn-status btn-sm-status btn-status-danger"></span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header card-header-content-between">
                                    <h4 class="card-title mb-0">Notifications</h4>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body-height">
                                    <!-- Tab Content -->
                                    <div class="tab-content" id="notificationTabContent">
                                        <div class="tab-pane fade show active" id="notificationNavOne"
                                            role="tabpanel" aria-labelledby="notificationNavOne-tab">
                                            <!-- List Group -->
                                            <ul class="list-group list-group-flush navbar-card-list-group">
                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck1" checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck1"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <img class="avatar avatar-sm avatar-circle"
                                                                    src="assets/img/160x160/img3.jpg"
                                                                    alt="Image Description">
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Brian Warner</h5>
                                                            <p class="text-body fs-5">changed an issue from "In
                                                                Progress" to <span
                                                                    class="badge bg-success">Review</span></p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">2hr</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck2" checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck2"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div
                                                                    class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                                                    <span class="avatar-initials">K</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Klara Hampton</h5>
                                                            <p class="text-body fs-5">mentioned you in a comment</p>
                                                            <blockquote class="blockquote blockquote-sm">
                                                                Nice work, love! You really nailed it. Keep it up!
                                                            </blockquote>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">10hr</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck3" checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck3"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/img/160x160/img10.jpg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Ruby Walter</h5>
                                                            <p class="text-body fs-5">joined the Slack group HS Team
                                                            </p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">3dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                            </ul>
                                            <!-- End List Group -->
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                                <!-- End Body -->
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                </li>

                <li class="nav-item">
                    <!-- Account -->
                    <div class="dropdown">
                        <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                            data-bs-dropdown-animation>
                            <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                            aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="assets/img/160x160/img6.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Administrateur</h5>
                                        <p class="card-text text-body">admin@pannel.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle"
                                    href="javascript:;" id="navSubmenuPagesAccountDropdown1"
                                    data-bs-toggle="dropdown" aria-expanded="false">Status</a>

                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu"
                                    aria-labelledby="navSubmenuPagesAccountDropdown1">
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-success me-1"></span> Disponible
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-danger me-1"></span> Occupé
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-warning me-1"></span> En attente
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="controller/logout.php">Déconnexion</a>
                        </div>
                    </div>
                    <!-- End Account -->
                </li>
            </ul>
            <!-- End Navbar -->
        </div>
    </div>
</header>