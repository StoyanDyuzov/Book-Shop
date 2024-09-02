<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - PDF Treasure Trove</title>
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(to bottom, #d3d3d3, #f5f5f5);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .left-section, .right-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .left-section {
            margin-right: 30px;
            align-items: flex-start;
        }

        .left-section h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .left-section a {
            color: orange;
            text-decoration: none;
            font-size: 18px;
            margin: 10px 0;
            display: block;
        }

        .left-section a:hover {
            text-decoration: underline;
        }

        .left-section form {
            margin-top: 20px;
        }

        .left-section button {
            padding: 10px 15px;
            border: none;
            border-radius: 12px;
            background-color: orange;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .left-section button:hover {
            background-color: #ffa500;
        }

        .right-section {
            flex: 2;
            align-items: flex-start;
        }

        .right-section form {
            display: flex;
            flex-direction: column;
        }

        .right-section form label,
        .right-section form input,
        .right-section form button {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .right-section form input[type="text"],
        .right-section form input[type="email"],
        .right-section form input[type="password"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .right-section form button {
            padding: 10px 15px;
            border: none;
            border-radius: 12px;
            background-color: orange;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .right-section form button:hover {
            background-color: #ffa500;
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            color: white;
            background-color: red;
            text-align: center;
        }

        .register {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section (Navigation) -->
        <div class="left-section">
            <h1>Admin Dashboard</h1>
            <a href="<?php echo e(route('adminDashboard')); ?>">Dashboard</a>
            <a href="<?php echo e(route('adminCreateBook')); ?>">Create Book</a>
            <a href="<?php echo e(route('adminCreateUser')); ?>">Create Admin</a>
            <a href="<?php echo e(route('adminFindUser')); ?>">Find User</a>
            <a href="<?php echo e(route('adminFindOrder')); ?>">Find Order</a>
            <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit">Log out</button>
            </form>
        </div>

        <!-- Right Section (Content/Actions) -->
        <div class="right-section">
            <h2>Create Admin</h2>
            <form action="<?php echo e(route('adminCreateUserSubmit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo e(old('first_name')); ?>" required>
                    
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" required>
        
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo e(old('username')); ?>" required>
            
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo e(old('email')); ?>" required>
        
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>

                <button type="submit" class="btn btn-primary">Create User</button>
            </form>

            <!-- Error Message Display -->
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LARAVEL\book-store\resources\views/adminCreateUser.blade.php ENDPATH**/ ?>