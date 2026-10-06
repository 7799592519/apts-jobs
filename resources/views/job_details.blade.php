<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }} - AP/TS Jobs</title>
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-white text-center py-4">
                        <span class="badge bg-success mb-2 fs-6">{{ $job->category->name }}</span>
                        <h2 class="text-primary fw-bold">{{ $job->title }}</h2>
                    </div>

                    <div class="card-body p-4">
                        <h5 class="fw-bold border-bottom pb-2">Job Description</h5>
                        <p class="text-muted">{{ $job->description }}</p>

                        <h5 class="fw-bold border-bottom pb-2 mt-4">Job Details</h5>
                        <table class="table table-bordered mt-3">
                            <tbody>
                                <tr>
                                    <th class="bg-light" width="30%">🎓 Qualification</th>
                                    <td>{{ $job->qualification }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">💼 Total Vacancies</th>
                                    <td>{{ $job->total_posts ?? 'Not Specified' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">📅 Posted Date</th>
                                    <td>{{ $job->created_at->format('d-M-Y') }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-danger">⏳ Last Date</th>
                                    <td class="text-danger fw-bold">{{ \Carbon\Carbon::parse($job->last_date)->format('d-M-Y') }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center mt-4">
                            @if($job->apply_link)
                                <a href="{{ $job->apply_link }}" target="_blank" class="btn btn-success btn-lg px-5 shadow">Apply Now 🚀</a>
                            @else
                                <button class="btn btn-secondary btn-lg px-5" disabled>Link Not Available</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
