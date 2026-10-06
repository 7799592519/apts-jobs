<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP/TS Job Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">AP/TS Jobs Portal</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Latest Job Notifications</h2>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <div class="row">
            @foreach($jobs as $job)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                       <a href="{{ route('category.show', $job->category->slug) }}" class="badge bg-success text-decoration-none mb-2">
    {{ $job->category->name }}
</a>
                        <h5 class="card-title text-primary fw-bold">{{ $job->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($job->description, 80) }}</p>

                        <ul class="list-unstyled">
                            <li><strong>🎓 Qualification:</strong> {{ $job->qualification }}</li>
                            <li><strong>💼 Total Posts:</strong> {{ $job->total_posts }}</li>
                            <li><strong>⏳ Last Date:</strong> <span class="text-danger">{{ \Carbon\Carbon::parse($job->last_date)->format('d-M-Y') }}</span></li>
                        </ul>

                        <a href="{{ route('job.show', $job->id) }}" class="btn btn-outline-primary btn-sm mt-2">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>

