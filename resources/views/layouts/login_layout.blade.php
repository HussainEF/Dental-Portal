<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Doctor Portal</title>
        @include('includes.head')
    </head>
    <body>
        @include('includes.navbar_login')
        <!-- Page content -->
        <div class="page-content">  
                      
            <!-- Main content -->
            <div class="content-wrapper">
                @livewireStyles
                @yield('content')
                @livewireScripts
            </div>
            <!-- /main content -->

        </div>
        <!--End Page content -->
        @include('includes.scripts')
    </body>
</html>