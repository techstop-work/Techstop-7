<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: #334F96;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .notification-type {
            background: #e8f4fd;
            border-left: 4px solid #334F96;
            padding: 15px;
            margin-bottom: 20px;
        }
        .notification-type h2 {
            margin: 0 0 5px 0;
            color: #334F96;
            font-size: 18px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table th,
        .info-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .info-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            width: 30%;
        }
        .message-box {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 4px;
            padding: 20px;
            margin: 20px 0;
        }
        .message-box h3 {
            margin: 0 0 10px 0;
            color: #495057;
        }
        .timestamp {
            background: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin: 20px 0;
            font-size: 14px;
            color: #6c757d;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
            font-size: 14px;
            color: #6c757d;
        }
        @media (max-width: 600px) {
            .container {
                margin: 10px;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <div class="notification-type">
                <h2>Admin Notification</h2>
                <p>A new contact form submission has been received and requires your attention.</p>
            </div>
            
            <table class="info-table">
                <tr>
                    <th>Name:</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $contact->phone ?? 'Not provided' }}</td>
                </tr>
                <tr>
                    <th>Subject:</th>
                    <td>{{ $contact->subject }}</td>
                </tr>
            </table>
            
            <div class="message-box">
                <h3>Message:</h3>
                <p>{{ $contact->message }}</p>
            </div>
            
            <div class="timestamp">
                <strong>Submitted:</strong> {{ $contact->created_at->format('F j, Y \a\t g:i A') }}
            </div>
        </div>
        
        <div class="footer">
            <p>This is an automated notification from your website contact form.</p>
            <p>&copy; {{ date('Y') }} TechStop. All rights reserved.</p>
        </div>
    </div>
</body>
</html>