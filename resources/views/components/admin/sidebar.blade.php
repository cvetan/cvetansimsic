<!--- Sidemenu -->
<div id="sidebar-menu">
    <ul>
        <li class="text-muted menu-title">{{ __('navigation.menu') }}</li>

        <li>
            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                <i class="zmdi zmdi-view-dashboard"></i>
                <span> {{ __('navigation.dashboard') }} </span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pages.index') }}" class="waves-effect">
                <i class="zmdi zmdi-file"></i>
                <span> {{ __('pages.page_list') }}</span>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<!-- Sidebar -->
<div class="clearfix"></div>
