    <title>@yield('title')</title>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container">
           @include('admin.auth.components.header')
        </div>
    </header>


    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <aside class="bg-white border-end p-3" style="width: 250px;">
            @include('admin.auth.components.sidebar') 
        </aside>
    

        <!-- Main Content -->
        <main class="flex-grow-1 p-4">
            <div class="container-fluid">
                 @yield('content')
            </div>
        </main>
    </div>


    <!-- Footer -->
    <footer class="bg-white text-center">
        <div class="container">
          @include('admin.auth.components.footer')
        </div>
    </footer>

</body>
