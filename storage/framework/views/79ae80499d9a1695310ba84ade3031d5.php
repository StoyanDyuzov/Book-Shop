<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Ensures padding and border are included in element's total width and height */
        }
        
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Cartoon-type font */
            background: linear-gradient(to bottom, #d3d3d3, #f5f5f5); /* Light grey gradient background */
            color: #333; /* Darker text color for better readability */
            text-align: center; /* Center-align text */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }

        div {
            background: white; /* White background for the form container */
            padding: 30px; /* Increased padding */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            max-width: 450px; /* Increased max width */
            width: 100%;
        }

        img {
            width: 80px; /* Set image width to 80px */
            height: auto;
            margin-bottom: 20px; /* Space below the image */
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Increased space between form elements */
            font-size: 14px; /* Smaller font size for form text */
            text-align: left; /* Align text within form to the left */
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px; /* Space between label and input */
            display: block; /* Ensure labels are block elements */
        }

        input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px; /* Rounded corners for inputs */
            font-size: 14px;
             /* Match font size with form text */
        }

        button {
            margin-top: 13px;
            padding: 11px;

            border: none;
            border-radius: 12px;
            background-color: orange; /* Orange background color */
            color: white; /* White text color */
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffa500; /* Lighter orange on hover */
        }

        h1 {
            margin-top: 20px;
            font-size: 16px; /* Smaller font size for heading */
        }

        a {
            color: orange; /* Orange color for links */
            text-decoration: none; /* Remove underline */
            font-size: 14px; /* Smaller font size for links */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #dc3545; /* Red border for alert */
            border-radius: 4px;
            background-color: #f8d7da; /* Light red background */
            color: #721c24; /* Dark red text color */
            font-size: 14px; /* Match font size with other text */
        }
        .login{
            font-size: 25px;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div>
        <img src="<?php echo e(asset('images/book.png')); ?>" alt="Example Image">
        <form action="<?php echo e(route('loginSubmit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <h1 class="login">Log in</h1>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <h1>Don't have an account? <span><a href="<?php echo e(route('register')); ?>">Click here...</a></span></h1>

                <button type="submit">Submit</button>
            </div>
        </form>
        
        <?php if(session('error')): ?>
            <div class="alert">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LARAVEL\book-store\resources\views/login.blade.php ENDPATH**/ ?>