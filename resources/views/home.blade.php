<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
        }

        .first-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            padding: 20px;
        }

        h1, h2 {
            margin: 10px 0; /* Space between headings */
        }

        a {
            display: block;
            margin: 10px;
            text-decoration: none;
            font-size: 30px;
            color: #007bff; /* Color for links */
            font-weight: bold;
            color: orange;
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        img {
            width: 300px;
            height: 400px;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="first-section">
        <h1>WELCOME!</h1>
        <h2>BUY RANDOM BOOK!</h2>
        <a href="{{ route('login') }}">Log in</a>
        <img src="{{ asset('images/book.png') }}" alt="Example Image">
    </div>
</body>
</html>
