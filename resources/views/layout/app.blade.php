<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.2.6/css/buttons.bootstrap5.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/3.2.5/js/buttons.html5.min.js"
        integrity="sha512-SJXfiKhGeIHL/snT2BhDubxR08IZp4Vr8g7xCkXMomtEJvK5RWOJQdbFmAUBMK4V7OOixaAtQTeVU7BYtxWKew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/3.2.5/js/buttons.print.js"
        integrity="sha512-GlOnFUy/vfQ6a4QocpDjQbArYno8PKdu74WfxMihMEWJkePKMxb+GdWE1osy5J+9iosj9a55x4CWfxV6QLQFrg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/3.2.5/js/buttons.print.min.js"
        integrity="sha512-uADRWmFIAogOR7XnOTW8uRbnXhgd8BRbsC6JYlX+z9vqdat0dbUsVBTyyjTFNyzKVn7acHxCO53fR3oT/qyoug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>E-Commerce Shope</h1>
    </div>
    <div class="container mt-5">
        @yield('content')
    </div>
    @yield('scripts')
</body>

</html>