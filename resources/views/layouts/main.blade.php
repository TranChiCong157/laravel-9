<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    @yield('css')
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">

</head>
<body>
    @include('admin.blocks.header')
    <main class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidebar')
                        @include('admin.blocks.sidebar')
                        @show
                       
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
           
    
            
    

        </div>
    </main>

    @include('admin.blocks.footer')
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.js')}}"></script>
     @yield('js')
</body>
</html>