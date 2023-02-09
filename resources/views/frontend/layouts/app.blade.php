<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
    <title>@yield('title')</title>
    @stack('front-css')
</head>
<body>
<x-frontend.header/>
@yield('content')
<x-frontend.footer/>
@stack('front-js')
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/team.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/font-awesome.js.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    @if (session()->has('success'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "{{ session()->get('success')  }}",
        showConfirmButton: true,
    })
    @endif

    @if (Session::has('info'))
    Swal.fire({
        position: 'center',
        icon: 'info',
        title: "{{ session()->get('info')  }}",
        showConfirmButton: true,
    })
    @endif

    @if (Session::has('error'))
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: "{{ Session::get('error') }}",
        showConfirmButton: true,
    })
    @endif
    @if (session()->has('not_checked_status'))
    Swal.fire({
        position: 'center',
        icon: 'info',
        title: "{{ session()->get('not_checked_status') }}",
        showConfirmButton: true,
    })
    @endif
    @if (session()->has('success_status'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "{{ session()->get('success_status') }}",
        showConfirmButton: true,
    })
    @endif
    @if (session()->has('reject_status'))
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: "{{ session()->get('reject_status') }}",
        showConfirmButton: true,
    })
    @endif
    @if (session()->has('not_found_status'))
    Swal.fire({
        position: 'center',
        icon: 'warning',
        title: "{{ session()->get('not_found_status') }}",
        showConfirmButton: true,
    })
    @endif
    $(".select2").select2({
        theme: 'bootstrap4',
    });
</script>

</body>
</html>
