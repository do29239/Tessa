<!DOCTYPE html>
<html>
<head>
    <title>Your Request Has been Approved</title>
    <style type="text/css">
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            font-size: 24px;
            font-weight: 800;
            color: #333333;
            margin: 0;
        }
        .content {
            padding: 20px 0;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
        }
        .button {
            display: inline-block;
            font-size: 18px;
            color: #ffffff;
            text-decoration: none;
            background-color: #f53f85;
            padding: 15px 30px;
            border-radius: 5px;
            border: 1px solid #f53f85;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Your Request Has Been Approved</h1>
    </div>
    <p>You are now a stylist in our system, so you can veiw and show like a stylist</p>
    <div class="footer">
        <h2 style="font-size: 24px; font-weight: 800; color: #000000; margin: 0;">
            Click below to proceed to our page and place your first order
        </h2>
        <p style="padding: 20px 0;">
            <a href="{{ url('https://tessa.mk/login') }}" target="_blank" class="button">Go To Page</a>
        </p>
    </div>
</div>
</body>
</html>
