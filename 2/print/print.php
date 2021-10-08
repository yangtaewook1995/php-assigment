<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            if ( $_POST['input_name'] == '또치') {
                echo '좋아함';
            } else if ( $_POST['input_name']=='고길동') {
                echo '싫어함';
            }

            // $conn= mysqli_connect('localhost', 'root', 'password', 'db');
            // $sql=`SELECT * FROM assigment where 대상=${$_POST['input_name']}`;
            // $res=mysqli_query($conn, $sql);
            // while($row = mysqli_fetch_array($res)) {
            //     echo $row['둘리에 대한 호감도'];
            // }
        ?>
    </body>
</html>

