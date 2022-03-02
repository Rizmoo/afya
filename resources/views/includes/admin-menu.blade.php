
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('dashboard') }}">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
        </a>
    </li>
</ul>
@if(\Illuminate\Support\Facades\Auth::user()->type == 'internal')
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" navigation-header">
            <span data-i18n="Apps &amp; Pages">Merchants</span>
        </li>
        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='shopping-bag'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Merchants</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('provider.type') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Provider Categories</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('providers') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Provider List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='shopping-bag'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Subscripons</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('plans') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Plans</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('subscriptions') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Subscribers</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" navigation-header">
            <span data-i18n="Apps &amp; Pages">Services</span>
        </li>
        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='shopping-bag'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Inventory</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('service.category') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Service Category</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('services') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Services</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class=" navigation-header">
            <span data-i18n="Apps &amp; Pages">Settings</span>
        </li>
        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='users'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Users</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('roles') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Roles</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('users') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Users</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='users'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Blog</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('roles') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('blog.create') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">New Article</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('users') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Blog List</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    @if(  \Request::route()->getName() != 'provider.show')

    @endif

@elseif(\Illuminate\Support\Facades\Auth::user()->type == 'merchant')
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
            <span data-i18n="Apps &amp; Pages">Provider Menus</span>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('appointments', Auth::user()->provider_id) }}">
                <i data-feather='trello'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Appointments</span>
            </a>
        </li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('merchant.services', Auth::user()->provider_id) }}">
                <i data-feather='trello'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Services</span>
            </a>
        </li>
        <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#">
                <i data-feather='users'></i>
                <span class="menu-title text-truncate" data-i18n="Dashboards">Blog</span>
            </a>
            <ul class="menu-content">
                <li>
                    <a class="d-flex align-items-center" href="{{ route('roles') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('blog.create') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">New Article</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="{{ route('blogs') }}">
                        <i data-feather="circle"></i>
                        <span class="menu-item text-truncate" data-i18n="Analytics">Blog List</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
@endif



