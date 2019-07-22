@if(Session::has('flash'))
    <div class="alert alert-{{ Session::get('flash_class') }}">
        {{ Session::get('flash') }}
    </div>
@endif
