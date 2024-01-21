<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="/admin/home" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/post">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Publications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/category">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin/tag">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tags</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
