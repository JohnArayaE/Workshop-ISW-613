<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Add New Student</h1>

    <a href="<?= site_url('/') ?>" class="btn btn-secondary mb-3">← Back to Home</a>

    <form action="<?= site_url('students/store') ?>" method="post">
        <div class="mb-3">
            <label class="form-label">First Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name:</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Career:</label>
            <select name="career_id" class="form-select" required>
                <option value="">-- Select a career --</option>
                <?php if (!empty($careers)): ?>
                    <?php foreach ($careers as $career): ?>
                        <option value="<?= esc($career['id']) ?>">
                            <?= esc($career['name']) ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option value="">No careers available</option>
                <?php endif; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Student</button>
    </form>
</div>
</body>
</html>
