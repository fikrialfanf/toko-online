<!DOCTYPE html>
<html lang="en">
@include('dashboard.head')

<body id="page-top">
    <div id="wrapper">
        @include('dashboard.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('dashboard.topbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('dashboard.footer')
</body>

</html>