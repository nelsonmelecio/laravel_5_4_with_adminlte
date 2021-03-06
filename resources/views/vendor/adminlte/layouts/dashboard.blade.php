<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">

    <div id="app">

        <div class="wrapper">

            @include('adminlte::layouts.partials.mainheader')
            @include('adminlte::layouts.partials.sidebar')

            <div class="content-wrapper">
                <section class="content" style="min-height: 768px; !important;">
                    @yield('main-content')
                    @include('vendor.adminlte.plugins.inventory')
                    <!-- include('vendor.adminlte.plugins.todo') -->
                    @include('vendor.adminlte.plugins.calendar')
                </section>
            
            </div>

            @include('adminlte::layouts.partials.controlsidebar')

            @include('adminlte::layouts.partials.footer')

        </div>

    </div>

    @section('scripts')
        @include('adminlte::layouts.partials.scripts')
    @show

</body>
</html>
