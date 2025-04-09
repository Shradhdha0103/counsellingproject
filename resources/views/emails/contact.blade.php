<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        .contact-info {
            margin-bottom: 15px;
        }
        .contact-info p {
            margin: 5px 0;
            color: #555;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>New Contact Form Submission</h1>
        
        <div class="contact-info">
            <p><strong>Name:</strong> {{ $contactData->name }}</p>
            <p><strong>Email:</strong> {{ $contactData->email }}</p>
            <p><strong>Phone:</strong> {{ $contactData->phone }}</p>
            <p><strong>Service:</strong> {{ $contactData->services }}</p>
            <p><strong>Message:</strong> </p>
            <p>{{ $contactData->message }}</p>
        </div>

        <div class="footer">
            <p>Thank you for getting in touch!</p>
        </div>
    </div>
</body>
</html>
