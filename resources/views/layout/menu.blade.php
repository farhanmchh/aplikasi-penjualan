<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
        data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item {{ Request::is('dashboard*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="/dashboard" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="menu-item {{ Request::is('category*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="/category" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="fas fa-filter"></i>
                        </span>
                        <span class="menu-text">Category</span>
                    </a>
                </li>
            @endif
            <li class="menu-item {{ Request::is('product*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="/product" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span class="menu-text">Product</span>
                </a>
            </li>
            <hr>
            <li class="menu-item" aria-haspopup="true">
                <a href="/logout" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    <span class="menu-text">Logout</span>
                </a>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
