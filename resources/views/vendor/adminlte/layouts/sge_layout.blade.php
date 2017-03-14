<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini"> <!-- sidebar-collapse -->

    <div id="app">

        <div class="wrapper">

            @include('adminlte::layouts.partials.mainheader')
            @include('adminlte::layouts.partials.sidebar')

            <div class="content-wrapper">
                <section class="content" style="min-height: 768px; !important;">
                    @yield('content-header-v2')
                    @yield('main-content')
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
