<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    @yield('head')
</head>
<body>

    @include('includes.nav')

                    <div class="center">
                        @yield('content')
                    </div>



        </div>



    <!-- Bootstrap & Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<footer>

        @include('includes.footer')

</footer>
</html>