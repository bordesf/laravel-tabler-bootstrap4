<div class="header py-4">
    <div class="container">
        <div class="d-flex">

            {{--left logo--}}
            @include('layouts.main-header.left-logo.logo')

            {{-- navbar right menus  --}}
            @include('layouts.main-header.navbar-right-menu.menu')

        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">

        {{-- tabs  --}}
        @include('layouts.main-header.tabs.tabs')

    </div>
</div>
