<!DOCTYPE html>
<html>
<head>
    <title>Edit Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Career</h1>

        <a href="<?= site_url('careers') ?>" class="btn btn-secondary mb-3">← Back to Careers</a>
        
        <form method="post" action="<?= site_url('careers/update/' . $career['id']) ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Career Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= esc($career['name']) ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Career</button>
        </form>
    </div>
</body>
</html>
