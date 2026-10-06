<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} Jobs</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">AP/TS Jobs Portal</a>
            <a href="/" class="btn btn-light btn-sm">⬅ Back to Home</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 border-bottom pb-2">
            Jobs in <span class="text-success">{{ $category->name }}</span>
        </h2>

        <div class="row">
            @if($jobs->count() > 0)
                @foreach($jobs as $job)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">{{ $category->name }}</span>
                            <h5 class="card-title text-primary fw-bold">{{ $job->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($job->description, 80) }}</p>

                            <a href="{{ route('job.show', $job->id) }}" class="btn btn-outline-primary btn-sm mt-2">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center mt-5">
                    <h4 class="text-muted">No jobs found in this category right now. 😢</h4>
                </div>
            @endif
        </div>
    </div>

</body>
</html>
