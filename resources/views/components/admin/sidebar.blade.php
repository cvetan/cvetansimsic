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
            <a href="#">
                <i class="zmdi zmdi-settings"></i>
                <span>{{ __('navigation.configuration') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.users.index') }}" class="waves-effect">
                <i class="zmdi zmdi-accounts"></i>
                <span>{{ __('navigation.users') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pages.index') }}" class="waves-effect">
                <i class="zmdi zmdi-file"></i>
                <span> {{ __('navigation.pages') }}</span>
            </a>
        </li>

        <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
                <i class="zmdi zmdi-quote"></i>
                <span>{{ __('navigation.quotes') }}</span>
                <span class="menu-arrow"></span>
            </a>

            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('admin.quote-categories.index') }}">
                        {{ __('navigation.quote_categories') }}
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.quotes.index') }}">
                        {{ __('navigation.quotes') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<!-- Sidebar -->
<div class="clearfix"></div>
