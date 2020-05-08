<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div >
            <p>ایمیل  : <?php echo e($data['email']); ?>.</p>
            <p>نام و نام خانوادگی: <?php echo e($data['name']); ?></p>
            <p>موضوع : <?php echo e($data['subject']); ?>.</p>
            <p>پیام : <?php echo e($data['message']); ?>.</p>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/email.blade.php ENDPATH**/ ?>