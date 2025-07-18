<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Massage from Startex</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }
        .email-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #242d5f;
        }
        p {
            line-height: 1.6;
            color: #333;
        }
        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>📩 Massage from Startex</h2>

        <p><strong>👤 Name:</strong> {{ $details['name'] }}</p>
        <p><strong>📧 Email:</strong> {{ $details['email'] }}</p>
        <p><strong>📝 Message:</strong></p>
        <p>{{ $details['message'] }}</p>

        <div class="footer">
            <hr>
            <p>This message was sent from your website contact form.</p>
        </div>
    </div>
</body>
</html>
