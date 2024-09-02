<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        .right-section form input[type="email"] {
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

        .user-details {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .user-details h1 {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section (Navigation) -->
        <div class="left-section">
            <h1>Admin Dashboard</h1>
            <a href="{{ route('adminDashboard') }}">Dashboard</a>
            <a href="{{ route('adminCreateBook') }}">Create Book</a>
            <a href="{{ route('adminCreateUser') }}">Create Admin</a>
            <a href="{{ route('adminFindUser') }}">Find User</a>
            <a href="{{ route('adminFindOrder') }}">Find Order</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Log out</button>
            </form>
        </div>

        <!-- Right Section (Content/Actions) -->
        <div class="right-section">
            <h2>Find User by Email</h2>
            <form action="{{ route('adminFindUserSubmit')}}" method="post">    
                @csrf
                <label for="email">Find by Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <button type="submit">Find User</button>
            </form>

            <!-- Error Message Display -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- User Details Display -->
            @if(session('user'))
                <div class="user-details">
                    <h1>Id: {{ session("user")->id }}</h1>
                    <h1>First name: {{session("user")->first_name}}</h1>
                    <h1>Last name: {{session("user")->last_name}}</h1>
                    <h1>Username: {{session("user")->username}}</h1>
                    <h1>Email: {{session("user")->email}}</h1>
                    <h1>Role: {{session("user")->role}}</h1>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
