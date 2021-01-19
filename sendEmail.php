<?php
if(isset($_POST['submit'])) {
    $to = 'nezabudu.team@gmail.com';//<-----Put Your email address here.
    $from = "nezabudu.team@gmail.com";
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $headers = "From:" . $from;
    $helps = $_POST['helps'];
            $email_subject = "Письмо от:" .$name;
            $email_body = "У Вас новое предложение о сотрудничестве. Информация: \n Имя:" . $name ." \n Телефон:" . $tel ."\n Чем могут помочь: \n ".$helps;
            mail($to,$email_subject,$email_body,$headers);
            echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро ответим Вам.";
            echo "<br/><br/><a href='http://webflat.ho.ua'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 5 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://webflat.ho.ua/dist/");}
window.setTimeout("changeurl();",5000);
</script>
