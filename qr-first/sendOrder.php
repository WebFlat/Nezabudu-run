<?php
// $to = 'nezabudu.team@gmail.com';
$to = 'y.vacheslav@gmail.com';
$from = "From: Заказ на уборку с сайта <nezabudu.com.ua>\n\r";
$date = $_POST['date'];
$cemetery = $_POST['cemetery'];
$sector = $_POST['sector'];
$number = $_POST['number'];
$area = $_POST['area'];
$row = $_POST['row'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$userSurname = $_POST['userSurname'];
$userName = $_POST['userName'];
$userTel = $_POST['userTel'];
$userEmail = $_POST['userEmail'];
$order = $_POST['order'];
$tel = $_POST['userTel'];
    $message = '
        <html>
            <body>
            <center>	
                <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
                <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
                <tr>
                <td><b>Телефон</b></td>
                <td><a href="tel:'.$userTel.'">'.$userTel.'</a></td>
                </tr>
                <tr>
                <td><b>Заказчик</b></td>
                <td>'.$userSurname.'</td>
                </tr>
                <tr>
                <td><b>Заказчик</b></td>
                <td>'.$userName.'</td>
                </tr>
                <tr>
                <td><b>Почта</b></td>
                <td>'.$userEmail.'</td>
                </tr>
                <td><b>Кладбище</b></td>
                <td>'.$cemetery.'</td>
                </tr>
                <tr>
                <td><b>Сектор</b></td>
                <td>'.$sector.'</td>
                </tr>
                <tr>
                <td><b>Квадрат</b></td>
                <td>'.$area.'</td>
                </tr>
                <tr>
                <td><b>Ряд</b></td>
                <td>'.$row.'</td>
                </tr>
                <tr>
                <td><b>Место</b></td>
                <td>'.$number.'</td>
                </tr>
                <tr>
                <td><b>Фамилия</b></td>
                <td>'.$surname.'</td>
                </tr>
                <tr>
                <td><b>Имя</b></td>
                <td>'.$name.'</td>
                </tr>
                <tr>
                <td><b>Отчетсво</b></td>
                <td>'.$patronymic.'</td>
                </tr>
                <tr>
                <td><b>Дата уборки</b></td>
                <td>'.$date.'</td>
                </tr>
                <tr>
                <td><b>Сумма заказа</b></td>
                <td>'.$order.'</td>
                </tr>
                </table>
            </center>	
            </body>
        </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8\r\n";
    $headers  .= $from;
        mail($to, $userName, $message, $headers); 

?>
