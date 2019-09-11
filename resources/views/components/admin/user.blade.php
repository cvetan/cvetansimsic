<!-- User -->
<div class="user-box">
    <div class="user-img">
        <img src="{{ asset('images/users/avatar-1.jpg') }}"
             alt="user-img" title="Mat Helme"
             class="img-circle img-thumbnail img-responsive">
        <div class="user-status offline"><i
                class="zmdi zmdi-dot-circle"></i></div>
    </div>
    <h5><a href="#">Mat Helme</a></h5>
    <ul class="list-inline">
        <li>
            <a href="{{ route('admin.profile') }}">
                <i class="zmdi zmdi-settings"></i>
            </a>
        </li>

        <li>
            {{ Form::open(['route' => 'logout', 'method' => 'POST']) }}
                <a href="#" class="text-custom admin-logout-trigger">
                    <i class="zmdi zmdi-power"></i>
                </a>
            {{ Form::close() }}
        </li>
    </ul>
</div>
<!-- End User -->
