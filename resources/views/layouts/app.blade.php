<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Marundan | Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

    <div class="container py-4">

        @if(session('success'))
        <div id="success-notification" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')

    </div>

    <script>
        const notification = document.getElementById('success-notification');
        if (notification) {
            setTimeout(() => {
                notification.style.display = 'none';
            }, 2000);
        }
    </script>
</body>

</html>
