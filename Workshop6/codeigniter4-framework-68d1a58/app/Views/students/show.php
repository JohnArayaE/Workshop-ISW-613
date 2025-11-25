<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h1>Students List</h1>

    <a href="<?= site_url('/') ?>" class="btn btn-secondary mb-3">← Back to Home</a>
    <a href="<?= site_url('students/create') ?>" class="btn btn-primary mb-3">+ Add New Student</a>

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Career</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= esc($student['id']) ?></td>
                    <td><?= esc($student['name']) ?></td>
                    <td><?= esc($student['lastname']) ?></td>
                    <td><?= esc($student['email']) ?></td>
                    <td><?= esc($student['career_name'] ?? 'No career') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>
</html>
