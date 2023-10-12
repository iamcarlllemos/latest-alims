<nav id="sidebar" class="sidebar-wrapper">
    <div class="app-brand px-3 py-2 d-flex align-items-center">
        <a class="navbar-brand w-100 mt-3" href="index.html">
            <h1 class="text-center">ALIM-S</h1>
        </a>
    </div>
    <div class="sidebar-profile">
        <img src="/uploads/avatar/<?= $current_userdata['avatar'] ?>" class="img-3x me-3 rounded-2" alt="Admin Dashboard" />
        <div class="m-0">
            <p class="m-0 text-secondary">Welcome Back!</p>
            <h6 class="m-0 text-nowrap fw-bold"><?= ucwords($current_userdata['firstname'] . ' ' . $current_userdata['lastname']) ?></h6>
        </div>
    </div>
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li>
                <a href="/student/subjects?course=<?= $requested_data['cid'] ?>&year=<?= $requested_data['yid'] ?>&section=<?= $requested_data['secid'] ?>">
                    <i class="bi bi-arrow-left"></i>
                    <span class="menu-text">Return to Subjects</span>
                </a>
            </li>
            <hr class="mt-2 mb-0">
        </ul>
        <ul class="sidebar-menu post-group">
            <div class="px-3 mt-4">
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
                <li class="skeleton-text"></li>
            </div>
        </ul>
    </div>
</nav>