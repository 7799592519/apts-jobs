<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Admin Panel - Job Portal</a>
            <a href="/" class="btn btn-outline-light btn-sm">⬅ Back to Home</a>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Add New Job Notification</h4>
                    </div>
                    <div class="card-body">

                        <!-- Form Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('job.store') }}" method="POST">
                            @csrf <!-- CSRF Token for Security -->

                            <div class="mb-3">
                                <label class="form-label">Job Title</label>
                                <input type="text" name="title" class="form-control" required placeholder="Ex: APPSC Group 1">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-select" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4" required placeholder="Enter full job description..."></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Qualification</label>
                                    <input type="text" name="qualification" class="form-control" required placeholder="Ex: Degree, B.Tech">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Total Posts</label>
                                    <input type="number" name="total_posts" class="form-control" placeholder="Ex: 500">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Date to Apply</label>
                                    <input type="date" name="last_date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Apply Link</label>
                                    <input type="url" name="apply_link" class="form-control" placeholder="https://...">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success w-100 fs-5">Save Job Notification</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
