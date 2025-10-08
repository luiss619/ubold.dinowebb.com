<!-- Topbar Start -->
<header class="app-topbar">
    <div class="container-fluid topbar-menu">
        <div class="d-flex align-items-center gap-2">
            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a class="logo-light" href="{{ route('second', ['dashboard', 'index']) }}">
                    <span class="logo-lg">
                        <img alt="logo" src="/images/logo.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo" src="/images/logo-sm.png" />
                    </span>
                </a>
                <!-- Logo Dark -->
                <a class="logo-dark" href="{{ route('second', ['dashboard', 'index']) }}">
                    <span class="logo-lg">
                        <img alt="dark logo" src="/images/logo-black.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo" src="/images/logo-sm.png" />
                    </span>
                </a>
            </div>
            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button btn btn-default btn-icon">
                <i class="ti ti-menu-4 fs-22"></i>
            </button>
            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button px-2" data-bs-target="#topnav-menu-content" data-bs-toggle="collapse">
                <i class="ti ti-menu-4 fs-22"></i>
            </button>
            <!-- Mega Menu Dropdown -->
            <div class="topbar-item d-none d-md-flex">
                <div class="dropdown">
                    <button class="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none" data-lang="mega-menu" data-bs-toggle="dropdown" data-bs-offset="0,17" type="button" aria-haspopup="false" aria-expanded="false">
                        Mega Menu <i class="ti ti-chevron-down ms-1 fs-16"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xxl p-0">
                        <div class="h-100" data-simplebar="" style="max-height: 380px;">
                            <div class="row g-0">
                                <!-- Dashboard & Analytics -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Dashboard &amp; Analytics
                                        </h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-chart-line align-middle me-2 fs-16"></i> Sales
                                                    Dashboard</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-bulb align-middle me-2 fs-16"></i> Marketing
                                                    Dashboard</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-currency-dollar align-middle me-2 fs-16"></i>
                                                    Finance Overview</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-users align-middle me-2 fs-16"></i> User
                                                    Analytics</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-activity align-middle me-2 fs-16"></i> Traffic
                                                    Insights</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-gauge align-middle me-2 fs-16"></i> Performance
                                                    Metrics</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-zoom-check align-middle me-2 fs-16"></i> Conversion
                                                    Tracking</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Project Management -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Project Management</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-layout-kanban align-middle me-2 fs-16"></i> Kanban
                                                    Workflow</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-calendar-stats align-middle me-2 fs-16"></i>
                                                    Project Timeline</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-list-check align-middle me-2 fs-16"></i> Task
                                                    Management</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-users-group align-middle me-2 fs-16"></i> Team
                                                    Members</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-clipboard-list align-middle me-2 fs-16"></i>
                                                    Assignments</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-chart-pie align-middle me-2 fs-16"></i> Resource
                                                    Allocation</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-file-invoice align-middle me-2 fs-16"></i> Project
                                                    Reports</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- User Management -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">User Management</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-user-circle align-middle me-2 fs-16"></i> User
                                                    Profiles</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-lock me-2 align-middle fs-16"></i> Access
                                                    Control</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-shield-lock align-middle me-2 fs-16"></i> Role
                                                    Permissions</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-notes align-middle me-2 fs-16"></i> Activity
                                                    Logs</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-settings align-middle me-2 fs-16"></i> Security
                                                    Settings</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-users align-middle me-2 fs-16"></i> User
                                                    Groups</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="ti ti-key align-middle me-2 fs-16"></i> Authentication
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .d-flex-->
        <div class="d-flex align-items-center gap-2">
            <!-- Search -->
            <div class="app-search d-none d-xl-flex me-2">
                <input class="form-control topbar-search rounded-pill" name="search" placeholder="Quick Search..."
                    type="search" />
                <i class="app-search-icon text-muted" data-lucide="search"></i>
            </div>
            <!-- Language Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link fw-bold"
                        data-bs-offset="0,24" data-bs-toggle="dropdown" type="button">
                        <img alt="user-image" class="rounded" height="20" id="selected-language-image"
                            src="/images/flags/us.svg" />
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" data-translator-lang="en" href="javascript:void(0);"
                            title="English">
                            <img alt="English" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/us.svg" />
                            <span class="align-middle">English</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="de" href="javascript:void(0);"
                            title="German">
                            <img alt="German" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/de.svg" />
                            <span class="align-middle">Deutsch</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="it" href="javascript:void(0);"
                            title="Italian">
                            <img alt="Italian" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/it.svg" />
                            <span class="align-middle">Italiano</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="es" href="javascript:void(0);"
                            title="Spanish">
                            <img alt="Spanish" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/es.svg" />
                            <span class="align-middle">Español</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="ru" href="javascript:void(0);"
                            title="Russian">
                            <img alt="Russian" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/ru.svg" />
                            <span class="align-middle">Русский</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="hi" href="javascript:void(0);"
                            title="Hindi">
                            <img alt="Hindi" class="me-1 rounded" data-translator-image="" height="18"
                                src="/images/flags/in.svg" />
                            <span class="align-middle">हिन्दी</span>
                        </a>
                    </div> <!-- end dropdown-menu-->
                </div> <!-- end dropdown-->
            </div> <!-- end topbar item-->
            <!-- Notification Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false"
                        class="topbar-link dropdown-toggle drop-arrow-none" data-bs-auto-close="outside"
                        data-bs-offset="0,24" data-bs-toggle="dropdown" type="button">
                        <i class="fs-xxl" data-lucide="bell"></i>
                        <span class="badge text-bg-danger badge-circle topbar-badge">5</span>
                    </button>
                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                        <div class="px-3 py-2 border-bottom">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-md fw-semibold">Notifications</h6>
                                </div>
                                <div class="col text-end">
                                    <a class="badge badge-soft-success badge-label py-1" href="#!">07
                                        Notifications</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar="" style="max-height: 300px;">
                            <!-- Notification 1 -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-1">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar" class="avatar-md rounded-circle"
                                            src="/images/users/user-4.jpg" />
                                        <span class="position-absolute rounded-pill bg-success notification-badge">
                                            <i class="ti ti-bell align-middle"></i>
                                            <span class="visually-hidden">unread notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Emily Johnson</span> commented on a task in
                                        <span class="fw-medium text-body">Design Sprint</span><br />
                                        <span class="fs-xs">12 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-1" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 2 -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-2">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar" class="avatar-md rounded-circle"
                                            src="/images/users/user-5.jpg" />
                                        <span class="position-absolute rounded-pill bg-info notification-badge">
                                            <i class="ti ti-cloud-upload align-middle"></i>
                                            <span class="visually-hidden">upload notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Michael Lee</span> uploaded files to <span
                                            class="fw-medium text-body">Marketing Assets</span><br />
                                        <span class="fs-xs">25 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-2" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 3 -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-3">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar" class="avatar-md rounded-circle"
                                            src="/images/users/user-6.jpg" />
                                        <span class="position-absolute rounded-pill bg-warning notification-badge">
                                            <i class="ti ti-alert-triangle align-middle"></i>
                                            <span class="visually-hidden">alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Sophia Ray</span> flagged an issue in <span
                                            class="fw-medium text-body">Bug Tracker</span><br />
                                        <span class="fs-xs">40 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-3" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 4 -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-4">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar" class="avatar-md rounded-circle"
                                            src="/images/users/user-7.jpg" />
                                        <span class="position-absolute rounded-pill bg-primary notification-badge">
                                            <i class="ti ti-calendar-event align-middle"></i>
                                            <span class="visually-hidden">event notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">David Kim</span> scheduled a meeting for
                                        <span class="fw-medium text-body">UX Review</span><br />
                                        <span class="fs-xs">1 hour ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-4" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 5 -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-5">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <img alt="User Avatar" class="avatar-md rounded-circle"
                                            src="/images/users/user-8.jpg" />
                                        <span class="position-absolute rounded-pill bg-secondary notification-badge">
                                            <i class="ti ti-edit-circle align-middle"></i>
                                            <span class="visually-hidden">edit</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Isabella White</span> updated the document in
                                        <span class="fw-medium text-body">Product Specs</span><br />
                                        <span class="fs-xs">2 hours ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-5" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 6 - Server CPU Alert -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-6">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <span
                                            class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                            <i class="ti ti-server-bolt fs-4 text-danger"></i>
                                        </span>
                                        <span class="position-absolute rounded-pill bg-danger notification-badge">
                                            <i class="ti ti-alert-circle align-middle"></i>
                                            <span class="visually-hidden">server alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Server #3</span> CPU usage exceeded 90%<br />
                                        <span class="fs-xs">Just now</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-6" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 7 - Deployment Success -->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="message-7">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="flex-shrink-0 position-relative">
                                        <span
                                            class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                            <i class="ti ti-rocket fs-4 text-success"></i>
                                        </span>
                                        <span class="position-absolute rounded-pill bg-success notification-badge">
                                            <i class="ti ti-check align-middle"></i>
                                            <span class="visually-hidden">deployment</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Production Server</span> deployment completed
                                        successfully<br />
                                        <span class="fs-xs">30 minutes ago</span>
                                    </span>
                                    <button
                                        class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn"
                                        data-dismissible="#message-7" type="button">
                                        <i class="ti ti-xbox-x-filled fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- All-->
                        <a class="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2"
                            href="javascript:void(0);">
                            Read All Messages
                        </a>
                    </div> <!-- End dropdown-menu -->
                </div> <!-- end dropdown-->
            </div> <!-- end topbar item-->
            <!-- Theme Mode Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link" data-bs-offset="0,24"
                        data-bs-toggle="dropdown" type="button">
                        <i class="fs-xxl" data-lucide="layout-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-2 dropdown-menu-end">
                        <div class="row align-items-center g-1">
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Google Logo" height="18" src="/images/logos/google.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Google</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Figma Logo" height="18" src="/images/logos/figma.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Figma</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Slack Logo" height="18" src="/images/logos/slack.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Slack</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title text-bg-light rounded-circle">
                                            <img alt="Dropbox Logo" height="18" src="/images/logos/dropbox.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Dropbox</span>
                                </a>
                            </div>
                            <div class="col-4 text-center">
                                <a class="btn btn-sm rounded-circle btn-icon btn-danger" href="javascript:void(0);">
                                    <i class="fs-18" data-lucide="circle-plus"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-calendar fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Calendar</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-message-circle fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Chat</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-folder fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Files</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="dropdown-item border border-dashed rounded text-center py-2"
                                    href="javascript:void(0);">
                                    <span class="avatar-sm d-block mx-auto mb-1">
                                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                            <i class="ti ti-users fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Team</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end dropdown-->
            </div> <!-- end topbar item-->
            <!-- Theme Mode Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link" data-bs-offset="0,24"
                        data-bs-toggle="dropdown" type="button">
                        <i class="fs-xxl" data-lucide="sun"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end thememode-dropdown">
                        <li>
                            <label class="dropdown-item">
                                <i class="align-middle me-1 fs-16" data-lucide="sun"></i>
                                <span class="align-middle">Light</span>
                                <input class="form-check-input" name="data-bs-theme" type="radio"
                                    value="light" />
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item">
                                <i class="align-middle me-1 fs-16" data-lucide="moon"></i>
                                <span class="align-middle">Dark</span>
                                <input class="form-check-input" name="data-bs-theme" type="radio"
                                    value="dark" />
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item">
                                <i class="align-middle me-1 fs-16" data-lucide="monitor-cog"></i>
                                <span class="align-middle">System</span>
                                <input class="form-check-input" name="data-bs-theme" type="radio"
                                    value="system" />
                            </label>
                        </li>
                    </ul> <!-- end dropdown-menu-->
                </div> <!-- end dropdown-->
            </div> <!-- end topbar item-->
            <!-- FullScreen -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" data-toggle="fullscreen" type="button">
                    <i class="fs-xxl fullscreen-off" data-lucide="maximize"></i>
                    <i class="fs-xxl fullscreen-on" data-lucide="minimize"></i>
                </button>
            </div>
            <!-- Light/Dark Mode Button -->
            <div class="topbar-item d-none">
                <button class="topbar-link" id="light-dark-mode" type="button">
                    <i class="fs-xxl mode-light-moon" data-lucide="moon"></i>
                </button>
            </div>
            <!-- Monocrome Mode Button -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" id="monochrome-mode" type="button">
                    <i class="fs-xxl" data-lucide="palette"></i>
                </button>
            </div>
            <!-- User Dropdown -->
            <div class="topbar-item nav-user">
                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="false"
                        class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-offset="0,19"
                        data-bs-toggle="dropdown" href="#!">
                        <img alt="user-image" class="rounded-circle me-lg-2 d-flex" src="/images/users/user-3.jpg"
                            width="32" />
                        <div class="d-lg-flex align-items-center gap-1 d-none">
                            <h5 class="my-0">Geneva</h5>
                            <i class="ti ti-chevron-down align-middle"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back 👋!</h6>
                        </div>
                        <!-- My Profile -->
                        <a class="dropdown-item" href="{{ route('second', ['users', 'profile']) }}">
                            <i class="ti ti-user-circle me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <!-- Notifications -->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="ti ti-bell-ringing me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Notifications</span>
                        </a>
                        <!-- Settings -->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="ti ti-settings-2 me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>
                        <!-- Support -->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="ti ti-headset me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Support Center</span>
                        </a>
                        <!-- Divider -->
                        <div class="dropdown-divider"></div>
                        <!-- Lock -->
                        <a class="dropdown-item" href="{{ route('second', ['auth', 'lock-screen']) }}">
                            <i class="ti ti-lock me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>
                        <!-- Logout -->
                        <a class="dropdown-item fw-semibold" href="javascript:void(0);">
                            <i class="ti ti-logout-2 me-1 fs-17 align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Button Trigger Customizer Offcanvas -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" data-bs-target="#theme-settings-offcanvas" data-bs-toggle="offcanvas"
                    type="button">
                    <i class="ti ti-settings icon-spin fs-24"></i>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
