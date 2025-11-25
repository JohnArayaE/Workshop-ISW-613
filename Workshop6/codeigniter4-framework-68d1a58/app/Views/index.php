<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
        .btn-career {
            background: #28a745;
        }
        .btn-career:hover {
            background: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Management System</h1>

        <a href="<?= site_url('careers/create') ?>" class="btn btn-career">Create Career</a>
        <a href="<?= site_url('students/create') ?>" class="btn">Create Student</a>
    </div>
</body>
</html>
