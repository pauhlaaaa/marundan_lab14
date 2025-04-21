<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        @if(auth()->check())
                            <h2 class="text-primary">Welcome, {{ auth()->user()->name }}!</h2>
                            <p class="text-muted mb-4">
                                You're logged in as <strong>{{ auth()->user()->email }}</strong>
                            </p>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        @else
                            <p class="text-danger">You are not logged in.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
