<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Established - {{ env("APP_NAME") }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{ env("APP_NAME") }}
        </div>
        <div class="content">
            <p>Dear <strong>{{ $data['user']->title }} {{ $data['user']->last_name }}</strong>,</p>
            <p>Your account with <strong>{{ env("APP_NAME") }}</strong> has been successfully established.</p>

            <p><strong>Account Details:</strong></p>
            <ul>
                <li><strong>Account Number:</strong> {{ $data['account']->account_number }}</li>
                <li><strong>Account Type:</strong> {{ $data['user']->account_type }}</li>
                <li><strong>Email:</strong> {{ $data['user']->email }}</li>
                <li><strong>Access Password:</strong> <span style="color: red; font-weight: bold;">{{ $data['user']->pass }}</span></li>
            </ul>

            <p>You can use your email and password to log in for more information.</p>
            <p><strong>Note:</strong> This is a one-time password. Please change your password once you log in to your account.</p>
            <p style="color: red; font-weight: bold;">Please do not share this information with anyone.</p>
        </div>
        <div class="footer">
            <p>Thank you for banking with us!</p>
        </div>
    </div>
</body>
</html>
