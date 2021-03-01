<?php
// $to = 'nezabudu.team@gmail.com';
$to = 'y.vacheslav@gmail.com';
$from = "From: Сообщение с формы заказа уборки о помощи с сайта <nezabudu.com.ua>\n\r";
$tel = $_POST['tel'];
$name = $_POST['name'];
    $message = '
        <html>
            <body>
            <center>	
                <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
                <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
                <tr>
                <td><b>Телефон</b></td>
                <td><a href="tel:'.$tel.'">'.$tel.'</a></td>
                </tr>
                <tr>
                <td><b>Имя</b></td>
                <td>'.$name.'</td>
                </tr>
                <tr>
                <td><b>Запрос</b></td>
                <td>Найти могилу</td>
                </tr>
                </table>
            </center>	
            </body>
        </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8\r\n";
    $headers  .= $from;


        mail($to, $name, $message, $headers); 

?>
