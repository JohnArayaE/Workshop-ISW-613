<!DOCTYPE html>
<html>
<head>
    <title>Create Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Create New Career</h1>

        <a href="<?= site_url('careers') ?>" class="btn btn-secondary mb-3">← Back to Careers</a>
        
        <form method="post" action="<?= site_url('careers/store') ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Career Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Career</button>
        </form>
    </div>
</body>
</html>
