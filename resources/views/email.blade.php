<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div >
            <p>ایمیل  : {{ $data['email'] }}.</p>
            <p>نام و نام خانوادگی: {{ $data['name'] }}</p>
            <p>موضوع : {{ $data['subject'] }}.</p>
            <p>پیام : {{ $data['message'] }}.</p>
        </div>
    </body>
</html>
