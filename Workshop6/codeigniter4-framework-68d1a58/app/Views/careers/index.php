<!DOCTYPE html>
<html>
<head>
    <title>Careers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Careers List</h1>

        <a href="<?= site_url('careers/create') ?>" class="btn btn-primary mb-3">+ Add New Career</a>
        <a href="<?= site_url('/') ?>" class="btn btn-secondary mb-3">← Back to Home</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($careers as $career): ?>
                    <tr>
                        <td><?= esc($career['id']) ?></td>
                        <td><?= esc($career['name']) ?></td>
                        <td>
                            <a href="<?= site_url('careers/edit/' . $career['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('careers/delete/' . $career['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this career?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
