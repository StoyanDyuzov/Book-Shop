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
            justify-content: space-between; /* Ensure space between the two sections */
        }

        .left-section, .right-section {
            flex: 1; /* Take up equal space */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .left-section {
            margin-right: 30px; /* Add space between left and right sections */
        }

        .left-section h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .left-section a {
            color: orange;
            text-decoration: none;
            font-size: 20px;
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
            font-size: 20px;
            cursor: pointer;
        }

        .left-section button:hover {
            background-color: #ffa500;
        }

        .right-section img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .right-section a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border-radius: 12px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .right-section a:hover {
            background-color: #ffa500;
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
            <img src="<?php echo e(asset('images/book.png')); ?>" alt="Example Image">
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LARAVEL\book-store\resources\views/adminDashboard.blade.php ENDPATH**/ ?>