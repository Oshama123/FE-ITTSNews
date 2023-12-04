<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.form.head')
</head>

<body>
    @yield('content')


    @yield('footjs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
