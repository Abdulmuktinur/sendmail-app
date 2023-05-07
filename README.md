# Send Mail App - Laravel

## Configure google account authentication
    1. Create 2-Step Verification
    2. Create App Password

## Configure .env
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT= 587
MAIL_USERNAME= your-email
MAIL_PASSWORD= code app password
MAIL_ENCRYPTION= tls
MAIL_FROM_ADDRESS= your-email
MAIL_FROM_NAME="${APP_NAME}"
```

## Configure config/mail.php
```
'gmail' => [
            'transport' => 'gmail',
        ],
```


```
'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'your-email'),
        'name' => env('MAIL_FROM_NAME', 'usernameEmail'),
    ],
```

### Create Class Mail/sendMail.php
writing in terminal ``` php artisan make:mail sendMail ```

### Create Controllers controller/sendMailController
writing in terminal ``` php artisan make:controller sendMailController ```

