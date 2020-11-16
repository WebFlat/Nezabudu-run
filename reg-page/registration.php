<?php

if (isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['password'])) {


    // Переменные с формы
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "password"; // Пароль БД
    $db_base = 'nezabudu_db'; // Имя БД
    $db_table = "user"; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }

    $result = $mysqli->query("INSERT INTO ".$db_table." (name,tel,email,password) VALUES ('$name','$tel','$email','$password')");

    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}

?>
<!--Переадресация на главную страницу сайта, через 5 секунды-->
<script language="JavaScript" type="text/javascript">
  function changeurl(){eval(self.location="http://google.com");}
  window.setTimeout("changeurl();",5000);
</script>
