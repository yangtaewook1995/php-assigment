<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            $to= 'receiver@gmail.com';
            $subject= '청첩장';
            $sex= 'male';
            $name = '수신인';

            if($sex == 'male') {
                $fp = fopen('mailMale.html', 'r');
                $message = fread($fp, fielsize('mailMale.html'));
            }

            else if($sex == 'female') {
                $fp = fopen('mailFemale.html', 'r');
                $message = fread($fp, fielsize('mailFemale.html'));
            }

            $message = str_replace('_NAME', $name, $message);

            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=utf-8';

            mail($to, $subject, $message, implode("\r\n", $headers));
        ?>
    </body>
</html>

