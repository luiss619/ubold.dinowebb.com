<!-- Horizontal Menu Start -->
<header class="topnav">
    <nav class="navbar navbar-expand-lg">
        <nav class="container-fluid">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('second', ['dashboard', 'index']) }}">
                            <span class="menu-icon"><i data-lucide="layout-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle drop-arrow-none"
                            data-bs-toggle="dropdown" href="#" id="topnav-drop" role="button">
                            <span class="menu-icon"><i data-lucide="chevrons-down-up"></i></span>
                            <span class="menu-text">Dropdown</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div aria-labelledby="topnav-drop" class="dropdown-menu">
                            <a class="dropdown-item" href="#!">Drop Item 1</a>
                            <a class="dropdown-item" href="#!">Drop Item 2</a>
                            <a class="dropdown-item disabled" href="#!">Drop Item Disabled <span
                                    class="badge text-bg-light opacity-50">soon</span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle drop-arrow-none"
                            data-bs-toggle="dropdown" href="#" id="topnav-menu-levels" role="button">
                            <span class="menu-icon"><i data-lucide="list-tree"></i></span>
                            <span class="menu-text">Menu Levels</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div aria-labelledby="topnav-menu-levels" class="dropdown-menu">
                            <a class="dropdown-item" href="#!"><i data-lucide="ice-cream-cone"></i> Single Item</a>
                            <div class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true"
                                    class="dropdown-item dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                    href="#" id="topnav-ecommerce" role="button">
                                    <i data-lucide="workflow"></i> Second Level <div class="menu-arrow"></div>
                                </a>
                                <div aria-labelledby="topnav-ecommerce" class="dropdown-menu">
                                    <a class="dropdown-item" href="#!">Third Level 1</a>
                                    <a class="dropdown-item" href="#!">Third Level 2</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle drop-arrow-none"
                            data-bs-toggle="dropdown" href="#" id="topnav-layouts" role="button">
                            <span class="menu-icon"><i data-lucide="panels-top-left"></i></span>
                            <span class="menu-text">Layouts</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div aria-labelledby="topnav-layouts" class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('second', ['dashboard', 'index']) }}">Vertical</a>
                            <a class="dropdown-item"
                                href="{{ route('second', ['layouts', 'horizontal']) }}">Horizontal</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#!">
                            <span class="menu-icon"><i data-lucide="shield-alert"></i></span>
                            <span class="menu-text">Disabled</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
</header>
<!-- Horizontal Menu End -->
