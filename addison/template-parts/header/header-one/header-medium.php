<!-- START .header-medium -->
<nav class="header-medium px-4 py-3 mt-3 bg-body border rounded-pill">
    <!-- START .row -->
    <div class="row align-items-center justify-content-lg-between">
        <!-- START .col -->
        <div class="col d-block d-lg-none">
            <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#header-mobile-end-offcanvas" aria-controls="header-mobile-end-offcanvas">
                <i class="bi bi-three-dots fs-5"></i>
            </button>
        </div>
        <!-- END .col -->

        <!-- START .col -->
        <div class="col col-lg-auto text-center text-lg-start">
            <?php get_template_part('template-parts/header/header-brand'); ?>
        </div>
        <!-- END .col -->

        <!-- START .col -->
        <div class="col-lg-5 d-none d-lg-block">
            <div class="input-group flex-nowrap">
                <button type="button" class="btn bg-body text-body-emphasis border rounded-start-pill d-flex align-items-center gap-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="uil uil-list-ui-alt fs-5"></i>
                    <span class="text-capitalize">Categories</span>
                    <span class="dropdown-toggle"></span>
                </button>
                <div class="dropdown-menu py-0 rounded-3 overflow-hidden" style="--bs-dropdown-min-width: max-content;">
                    <form action="#" method="#" class="px-3 py-1 border-bottom">
                        <div class="input-group">
                            <span class="input-group-text bg-body text-body-emphasis">
                                <i class="uil uil-filter fs-5"></i>
                            </span>
                            <input type="search" id="search" class="form-control text-body-emphasis" placeholder="Start typing for filter..." autocomplete="false" />
                        </div>
                    </form>
                    <ul style="overflow-y: auto; max-height: 250px;" class="list-unstyled">
                        <li class="dropdown-header d-flex align-items-center justify-content-center gap-2 py-1 border-bottom text-body-emphasis">
                            <i class="bi bi-list-nested fs-5"></i>
                            <span class="text-capitalize">Select your category</span>
                        </li>
                        <li>
                            <button
                                type="button"
                                class="dropdown-item d-flex align-items-center justify-content-between text-body-emphasis"
                                data-bs-toggle="collapse"
                                data-bs-target="#cat-collapse"
                                aria-expanded="false"
                                aria-controls="cat-collapse"
                            >
                                <span class="d-flex align-items-center gap-2">
                                    <i class="uil uil-microsoft fs-5"></i>
                                    <span class="text-capitalize">Microsoft</span>
                                </span>
                                <span class="d-flex align-items-center gap-2">
                                    <span class="dropdown-toggle me-1"></span>
                                    <span class="d-flex align-items-center justify-content-center badge text-bg-primary fw-normal rounded-pill">
                                        10+
                                    </span>
                                </span>
                            </button>
                            <ul id="cat-collapse" class="list-unstyled collapse bg-body-secondary">
                                <li>
                                    <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                        <i class="uil uil-windows fs-5"></i>
                                        <span class="text-capitalize">Microsoft Windows</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                        <i class="uil uil-windows fs-5"></i>
                                        <span class="text-capitalize">Microsoft Office</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                        <i class="uil uil-server fs-5"></i>
                                        <span class="text-capitalize">Windows Server</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                        <i class="uil uil-brackets-curly fs-5"></i>
                                        <span class="text-capitalize">Dev Tools</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-adobe fs-5"></i>
                                <span class="text-capitalize">Adobe</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item active d-flex align-items-center justify-content-between" aria-current="true">
                                <span class="d-flex align-items-center gap-2">
                                    <i class="uil uil-shield fs-5"></i>
                                    <span class="text-capitalize">Security</span>
                                </span>
                                <i class="uil uil-check fs-5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-globe fs-5"></i>
                                <span class="text-capitalize">VPN</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-icons fs-5"></i>
                                <span class="text-capitalize">Games</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-box fs-5"></i>
                                <span class="text-capitalize">Bundles</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-fire fs-5"></i>
                                <span class="text-capitalize">Best Sellers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-ellipsis-h fs-5"></i>
                                <span class="text-capitalize">Others</span>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="dropdown-item d-flex align-items-center justify-content-center gap-2 border-top text-body-emphasis">
                        <i class="uil uil-eye fs-5"></i>
                        <span class="text-capitalize">View All Categories</span>
                    </a>
                </div>
                <button type="button" class="btn bg-body text-body-emphasis border rounded-end-pill d-flex align-items-center flex-fill justify-content-between" aria-label="Search">
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-search fs-5"></i>
                        <span class="text-capitalize">Search</span>
                    </span>
                    <span class="d-flex align-items-center border rounded">
                        <kbd class="bg-transparent text-body-emphasis rounded-0">⌘</kbd>
                        <kbd class="bg-transparent text-body-emphasis text-uppercase rounded-0">K</kbd>
                    </span>
                </button>
            </div>
        </div>
        <!-- END .col -->

        <!-- START .col -->
        <div class="col col-lg-auto text-end">
            <ul class="list-inline position-relative d-none d-lg-block">
                <li class="list-inline-item dropdown">
                    <button type="button" class="btn bg-body text-body-emphasis border d-flex align-items-center gap-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="bi bi-currency-exchange fs-5"></i>
                        <span class="dropdown-toggle"></span>
                    </button>
                    <ul class="dropdown-menu border-0 rounded-3 shadow-lg" style="--bs-dropdown-min-width: max-content;">
                        <li class="dropdown-header d-flex align-items-center justify-content-center gap-2 py-1 border-bottom text-body-emphasis fs-6">
                            <i class="bi bi-currency-exchange fs-5"></i>
                            <span class="text-capitalize">Select your currency</span>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item active d-flex align-items-center justify-content-between" aria-current="true">
                                <span class="d-flex align-items-center gap-2">
                                    <i class="bi bi-currency-dollar fs-5"></i>
                                    <span class="text-uppercase">USD</span>
                                </span>
                                <i class="uil uil-check fs-5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="bi bi-currency-euro fs-5"></i>
                                <span class="text-uppercase">EUR</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="bi bi-currency-pound fs-5"></i>
                                <span class="text-uppercase">GBP</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-inline-item dropdown">
                    <button type="button" class="btn bg-body text-body-emphasis border d-flex align-items-center gap-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="bi bi-translate fs-5"></i>
                        <span class="dropdown-toggle"></span>
                    </button>
                    <ul class="dropdown-menu border-0 rounded-3 shadow-lg" style="--bs-dropdown-min-width: max-content;">
                        <li class="dropdown-header d-flex align-items-center justify-content-center gap-2 py-1 border-bottom text-body-emphasis fs-6">
                            <i class="bi bi-translate fs-5"></i>
                            <span class="text-capitalize">Select your language</span>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item active d-flex align-items-center justify-content-between" aria-current="true">
                                <span class="d-flex align-items-center gap-2">
                                    <i class="uil uil-shield fs-5"></i>
                                    <span class="text-capitalize">English</span>
                                </span>
                                <i class="uil uil-check fs-5"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-shield fs-5"></i>
                                <span class="text-capitalize">French</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center gap-2 text-body-emphasis">
                                <i class="uil uil-shield fs-5"></i>
                                <span class="text-capitalize">العربية</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-inline-item">
                    <button type="button" class="btn bg-body text-body-emphasis border d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#sign-in-modal">
                        <i class="bi bi-person-circle fs-5"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button type="button" class="btn bg-body text-body-emphasis border position-relative d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#compare-products-modal">
                        <i class="bi bi-repeat fs-5"></i>
                        <span style="width: 16px; height: 16px;" class="position-absolute top-0 start-100 translate-middle d-flex align-items-center justify-content-center badge text-bg-primary fw-normal p-0 rounded-circle">0</span>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button type="button" class="btn bg-body text-body-emphasis border position-relative d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#wishlist-modal">
                        <i class="bi bi-heart fs-5"></i>
                        <span style="width: 16px; height: 16px;" class="position-absolute top-0 start-100 translate-middle d-flex align-items-center justify-content-center badge text-bg-primary fw-normal p-0 rounded-circle">0</span>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button type="button" class="btn bg-body text-body-emphasis border position-relative d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#shopping-cart-offcanvas">
                        <i class="bi bi-handbag fs-5"></i>
                        <span style="width: 16px; height: 16px;" class="position-absolute top-0 start-100 translate-middle d-flex align-items-center justify-content-center badge text-bg-primary fw-normal p-0 rounded-circle">0</span>
                    </button>
                </li>
            </ul>
            <div class="d-block d-lg-none">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#header-mobile-start-offcanvas" aria-controls="header-mobile-start-offcanvas">
                    <i class="bi bi-three-dots fs-5"></i>
                </button>
            </div>
        </div>
        <!-- END .col -->
    </div>
    <!-- END .row -->
</nav>
<!-- END .header-medium -->
