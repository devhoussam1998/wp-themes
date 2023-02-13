<!-- START #wishlist-modal -->
<div id="wishlist-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content overflow-visible border-0">
            <div class="modal-header position-relative">
                <h5 class="modal-title">Wishlist</h5>
                <button
                    type="button"
                    class="btn btn-danger p-0 d-flex align-items-center justify-content-center w-11 h-11 rounded-circle position-absolute top-50 start-100 translate-middle"
                    data-bs-dismiss="modal"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Close"
                    data-bs-trigger="hover"
                    aria-label="Close"
                >
                    <i class="bi bi-x-lg fs-5"></i>
                </button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<!-- END #wishlist-modal -->

<!-- START #compare-products-modal -->
<div id="compare-products-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content overflow-visible border-0">
            <div class="modal-header position-relative">
                <h5 class="modal-title">Compare Products</h5>
                <button
                    type="button"
                    class="btn btn-danger p-0 d-flex align-items-center justify-content-center w-11 h-11 rounded-circle position-absolute top-50 start-100 translate-middle"
                    data-bs-dismiss="modal"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    data-bs-title="Close"
                    data-bs-trigger="hover"
                    aria-label="Close"
                >
                    <i class="bi bi-x-lg fs-5"></i>
                </button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<!-- END #compare-products-modal -->

<!-- START #sign-up-modal -->
<div id="sign-up-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content overflow-visible border-0">
            <button
                type="button"
                class="btn btn-danger p-0 d-flex align-items-center justify-content-center w-11 h-11 rounded-circle position-absolute top-0 start-100 translate-middle"
                data-bs-dismiss="modal"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                data-bs-title="Close"
                data-bs-trigger="hover"
                aria-label="Close"
            >
                <i class="bi bi-x-lg fs-5"></i>
            </button>
            <div class="modal-header">
                <h4 class="modal-title d-flex align-items-center gap-2">
                    <i class="bi bi-person-plus-fill"></i>
                    <span class="text-capitalize fw-semibold">Create your account</span>
                </h4>
                <p>
                    Already have an account?
                    <a href="#" role="button" class="link-primary text-capitalize" data-bs-toggle="modal" data-bs-target="#sign-in-modal">Sign In</a>
                </p>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- END #sign-up-modal -->

<!-- START #sign-in-modal -->
<div id="sign-in-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content overflow-visible border-0">
            <button
                type="button"
                class="btn btn-danger p-0 d-flex align-items-center justify-content-center w-11 h-11 rounded-circle position-absolute top-0 start-100 translate-middle z-1"
                data-bs-dismiss="modal"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                data-bs-title="Close"
                data-bs-trigger="hover"
                aria-label="Close"
            >
                <i class="bi bi-x-lg fs-5"></i>
            </button>
            <div class="modal-body p-0 rounded-3">
                <div class="row g-0">
                    <div class="col-lg-6 order-2 order-lg-1 bg-dark"></div>
                    <div class="col-lg-6 order-1">
                        <div class="px-4 py-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-person-fill-lock fs-4"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="text-capitalize fw-semibold mb-2">Sign in to your account</h4>
                                    <p>Please enter your details below.</p>
                                </div>
                            </div>
                            <form action="#" method="post" class="needs-validation" novalidate>
                                <div class="position-relative mb-3">
                                    <label for="email" class="form-label text-capitalize">Email Address <span class="text-danger fw-semibold">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-body text-body-emphasis"><i class="bi bi-at fs-5"></i></span>
                                        <div class="form-floating has-validation">
                                            <input type="email" id="email" class="form-control" placeholder="email@example.com" autocomplete="off" required />
                                            <label for="email">email@example.com</label>
                                            <div class="invalid-tooltip d-flex align-items-center gap-2 w-100 mt-2 px-3 rounded-pill">
                                                <i class="bi bi-exclamation-triangle fs-5"></i>
                                                <span>Please choose an email.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label d-flex align-items-center justify-content-between text-capitalize">
                                        <span>Password <span class="text-danger fw-semibold">*</span></span>
                                        <a href="#" role="button" class="link-primary text-decoration-underline text-capitalize" data-bs-toggle="modal" data-bs-target="#forgot-password-modal">Forgot Password?</a>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-body text-body-emphasis">
                                            <i class="bi bi-shield-lock fs-5"></i>
                                        </span>
                                        <div class="form-floating">
                                            <input type="password" id="password" class="form-control" placeholder="Password" required />
                                            <label for="password" class="text-capitalize">Password</label>
                                        </div>
                                        <button type="button" id="toggle-password-visibility" class="btn btn-primary">
                                            <i class="bi bi-eye-slash fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-0">
                                        <input type="checkbox" role="switch" id="remember-me" class="form-check-input" checked />
                                        <label for="remember-me" class="form-check-label text-capitalize">Remember for 30 days</label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center gap-2 rounded-pill">
                                        <i class="bi bi-box-arrow-in-right fs-5"></i>
                                        <span class="text-capitalize">Sign in to your account</span>
                                    </button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center my-3">
                                <hr class="flex-grow-1 m-0" />
                                <span class="small flex-grow-0 px-2 text-capitalize">
                                    Or sign in with
                                </span>
                                <hr class="flex-grow-1 m-0" />
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-3 mb-3">
                                <button type="button" class="btn bg-body text-body-emphasis border d-flex align-items-center flex-fill justify-content-center gap-2 rounded-pill">
                                    <i class="bi bi-google fs-5"></i>
                                    <span class="text-capitalize">Google</span>
                                </button>
                                <div class="vr"></div>
                                <button type="button" class="btn bg-body text-body-emphasis border d-flex align-items-center flex-fill justify-content-center gap-2 rounded-pill">
                                    <i class="bi bi-facebook fs-5"></i>
                                    <span class="text-capitalize">Facebook</span>
                                </button>
                            </div>
                            <p class="text-center">
                                You don't have an account?
                                <a href="#" role="button" class="link-primary text-decoration-underline text-capitalize" data-bs-toggle="modal" data-bs-target="#sign-up-modal">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END #sign-in-modal -->

<!-- START #forgot-password-modal -->
<div id="forgot-password-modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content overflow-visible border-0">
            <button
                type="button"
                class="btn btn-danger p-0 d-flex align-items-center justify-content-center w-11 h-11 rounded-circle position-absolute top-0 start-100 translate-middle"
                data-bs-dismiss="modal"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                data-bs-title="Close"
                data-bs-trigger="hover"
                aria-label="Close"
            >
                <i class="bi bi-x-lg fs-5"></i>
            </button>
            <div class="modal-header">
                <h4 class="modal-title d-flex align-items-center gap-2">
                    <i class="bi bi-key-fill"></i>
                    <span class="text-capitalize fw-semibold">Reset Password</span>
                </h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- END #forgot-password-modal -->
