<!-- Theme Settings -->
<div class="offcanvas offcanvas-end overflow-hidden" id="theme-settings-offcanvas" tabindex="-1">
    <div class="d-flex justify-content-between text-bg-primary gap-2 p-3"
        style="background-image: url(/images/user-bg-pattern.png);">
        <div>
            <h5 class="mb-1 fw-bold text-white text-uppercase">Admin Customizer</h5>
            <p class="text-white text-opacity-75 fst-italic fw-medium mb-0">Easily configure layout, styles, and
                preferences for your admin interface.</p>
        </div>
        <div class="flex-grow-0">
            <button class="d-block btn btn-sm bg-white bg-opacity-25 text-white rounded-circle btn-icon"
                data-bs-dismiss="offcanvas" type="button"><i class="ti ti-x fs-lg"></i></button>
        </div>
    </div>
    <div class="offcanvas-body p-0 h-100" data-simplebar="">
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fw-bold">Select Theme</h5>
            <div class="row g-3">
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-default" name="data-skin" type="radio"
                            value="default" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-default">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-default.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Default</h5>
                </div>
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-material" name="data-skin" type="radio"
                            value="material" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-material">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-material.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Material</h5>
                </div>
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-modern" name="data-skin" type="radio"
                            value="modern" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-modern">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-modern.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Modern</h5>
                </div>
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-saas" name="data-skin" type="radio"
                            value="saas" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-saas">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-saas.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">SaaS</h5>
                </div>
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-flat" name="data-skin" type="radio"
                            value="flat" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-flat">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-flat.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Flat</h5>
                </div>
                <div class="col-6">
                    <div class="form-check card-radio shadow">
                        <input class="form-check-input" id="demo-skin-minimal" name="data-skin" type="radio"
                            value="minimal" />
                        <label class="form-check-label p-0 w-100" for="demo-skin-minimal">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/themes/theme-minimal.png" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Minimal</h5>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fw-bold">Color Scheme</h5>
            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="layout-color-light" name="data-bs-theme" type="radio"
                            value="light" />
                        <label class="form-check-label p-0 w-100" for="layout-color-light">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/light.svg" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="layout-color-dark" name="data-bs-theme" type="radio"
                            value="dark" />
                        <label class="form-check-label p-0 w-100" for="layout-color-dark">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/dark.svg" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Dark</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="layout-color-system" name="data-bs-theme" type="radio"
                            value="system" />
                        <label class="form-check-label p-0 w-100" for="layout-color-system">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/system.svg" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">System</h5>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fw-bold">Topbar Color</h5>
            <div class="row g-3">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="topbar-color-light" name="data-topbar-color"
                            type="radio" value="light" />
                        <label class="form-check-label p-0 w-100" for="topbar-color-light">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/topbar-light.svg" />
                        </label>
                    </div>
                    <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="topbar-color-dark" name="data-topbar-color"
                            type="radio" value="dark" />
                        <label class="form-check-label p-0 w-100" for="topbar-color-dark">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/topbar-dark.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="topbar-color-gray" name="data-topbar-color"
                            type="radio" value="gray" />
                        <label class="form-check-label p-0 w-100" for="topbar-color-gray">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/topbar-gray.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" id="topbar-color-gradient" name="data-topbar-color"
                            type="radio" value="gradient" />
                        <label class="form-check-label p-0 w-100" for="topbar-color-gradient">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/topbar-gradient.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fw-bold">Sidenav Color</h5>
            <div class="row g-3">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-color-light" name="data-menu-color"
                            type="radio" value="light" />
                        <label class="form-check-label p-0 w-100" for="sidenav-color-light">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/light.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Light</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-color-dark" name="data-menu-color"
                            type="radio" value="dark" />
                        <label class="form-check-label p-0 w-100" for="sidenav-color-dark">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/side-dark.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-color-gray" name="data-menu-color"
                            type="radio" value="gray" />
                        <label class="form-check-label p-0 w-100" for="sidenav-color-gray">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/side-gray.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-color-gradient" name="data-menu-color"
                            type="radio" value="gradient" />
                        <label class="form-check-label p-0 w-100" for="sidenav-color-gradient">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/side-gradient.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-color-image" name="data-menu-color"
                            type="radio" value="image" />
                        <label class="form-check-label p-0 w-100" for="sidenav-color-image">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/side-image.svg" />
                        </label>
                    </div>
                    <h5 class="fs-sm text-center text-muted mt-2 mb-0">Image</h5>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fw-bold">Sidebar Size</h5>
            <div class="row g-3">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-default" name="data-sidenav-size"
                            type="radio" value="default" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-default">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/light.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 text-center text-muted mt-2">Default</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-compact" name="data-sidenav-size"
                            type="radio" value="compact" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-compact">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/sidebar-compact.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 text-center text-muted mt-2">Compact</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-small" name="data-sidenav-size"
                            type="radio" value="condensed" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-small">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/sidebar-sm.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 text-center text-muted mt-2">Condensed</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-small-hover" name="data-sidenav-size"
                            type="radio" value="on-hover" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-small-hover">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/sidebar-sm.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 text-center text-muted mt-2">On Hover</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-small-hover-active" name="data-sidenav-size"
                            type="radio" value="on-hover-active" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-small-hover-active">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/light.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 fs-base text-center text-muted mt-2">On Hover - Show</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" id="sidenav-size-offcanvas" name="data-sidenav-size"
                            type="radio" value="offcanvas" />
                        <label class="form-check-label p-0 w-100" for="sidenav-size-offcanvas">
                            <img alt="layout-img" class="img-fluid" src="/images/layouts/sidebar-full.svg" />
                        </label>
                    </div>
                    <h5 class="mb-0 text-center text-muted mt-2">Offcanvas</h5>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom border-dashed">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Layout Position</h5>
                <div class="btn-group radio" role="group">
                    <input class="btn-check" id="layout-position-fixed" name="data-layout-position" type="radio"
                        value="fixed" />
                    <label class="btn btn-sm btn-soft-warning w-sm" for="layout-position-fixed">Fixed</label>
                    <input class="btn-check" id="layout-position-scrollable" name="data-layout-position"
                        type="radio" value="scrollable" />
                    <label class="btn btn-sm btn-soft-warning w-sm ms-0"
                        for="layout-position-scrollable">Scrollable</label>
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><label class="fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label></h5>
                <div class="form-check form-switch fs-lg">
                    <input class="form-check-input" id="sidebaruser-check" name="sidebar-user" type="checkbox" />
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button class="btn btn-light fw-semibold py-2 w-100" id="reset-layout" type="button">Reset</button>
            </div>
            <div class="col-6">
                <a class="btn btn-danger bg-gradient py-2 fw-semibold w-100" href="#!" target="_blank">Buy
                    Now</a>
            </div>
        </div>
    </div>
</div>
