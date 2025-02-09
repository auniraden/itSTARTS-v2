<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Verify Your Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .button {
            display: inline-block;
            background: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Verify Your Email Address</h2>
        <p>Thank you for signing up! Click the button below to verify your email:</p>
        <a href="{{ $url }}" class="button">Verify Email</a>
        <p>If you did not create an account, no further action is required.</p>
    </div>
</body>

</html>
