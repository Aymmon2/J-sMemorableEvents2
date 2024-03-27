<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            width: 40%;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 10px;
            color: #666;
        }
        strong {
            color: #2b2929;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, you have got an enquiry!</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Date & Time of Event:</strong> {{ \Carbon\Carbon::parse($data['date'] . ' ' . $data['time'])->format('d F Y - g:i a') }}</p>
        <p><strong>Occasion:</strong> {{ $data['occasion'] }}</p>
        <p><strong>Theme Colors:</strong> {{ $data['themecolors'] }}</p>
        <p><strong>Number of People:</strong> {{ $data['people'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    </div>
</body>
</html>
