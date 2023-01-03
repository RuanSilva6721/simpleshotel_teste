
@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.menu')
        @include('layouts.message')

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    @include('layouts.footer')

</body>
</html>
