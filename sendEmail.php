<?php
// if(isset($_POST['submit'])) {
//     $to = 'nezabudu.team@gmail.com';//<-----Put Your email address here.
//     $from = "nezabudu.team@gmail.com";
//     $name = $_POST['name'];
//     $tel = $_POST['tel'];
//     $headers = "From:" . $from;
//     $helps = $_POST['helps'];
//             $email_subject = "Письмо от:" .$name;
//             $email_body = "У Вас новое предложение о сотрудничестве. Информация: \n Имя:" . $name ." \n Телефон:" . $tel ."\n Чем могут помочь: \n ".$helps;
//             mail($to,$email_subject,$email_body,$headers);
//             echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро ответим Вам.";
//             echo "<br/><br/><a href='http://webflat.ho.ua'>Вернуться на сайт.</a>";
// }

$to = 'nezabudu.team@gmail.com';
$from = "From: предложение о сотрудничестве с сайта <nezabudu.com.ua>\n\r";
$name = $_POST['name'];
$tel = $_POST['tel'];
$helps = $_POST['helps'];
$message = '
    <html>
        <body>
        <center>	
            <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
            <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
            <tr>
            <td><b>От кого</b></td>
            <td>'.$name.'</td>
            </tr>
            <tr>
            <td><b>Телефон</b></td>
            <td><a href="tel:'.$tel.'">'.$tel.'</a></td>
            </tr>
            <tr>
            <td><b>Имя</b></td>
            <td>'.$name.'</td>
            </tr>
            <tr>
            <td><b>Вид помощи</b></td>
            <td>'.$helps.'</td>
            </tr>
            </table>
        </center>	
        </body>
    </html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
$headers  .= $from;


    mail($to, $name, $message, $headers);

?>
<!--Переадресация на главную страницу сайта, через 5 секунды-->
<!-- <script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://webflat.ho.ua/dist/");}
window.setTimeout("changeurl();",5000);
</script> -->
