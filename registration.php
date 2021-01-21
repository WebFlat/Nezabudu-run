<?php  

$servername = "db1.ho.ua";
$username = "webflat";
$password = "Yachuk185429";
$database = "webflat";
$conn = mysqli_connect($servername, $username, $password, $database);

  
if (isset($_POST['name']))  
{$userName = $_POST['name'];}
  
  
if (isset($_POST['soname']))  
{$userSoname = $_POST['soname'];}
  
  
  
if (isset($_POST['patronymic']))  
{$userPatronymic = $_POST['patronymic'];}
  
  
  
if (isset($_POST['tel']))  
{$userTel = $_POST['tel'];}
  
  
  
if (isset($_POST['mail'])) 
{$userEmail = $_POST['mail'];}
  
  
if (isset($_POST['password']))  
{$userPassword = $_POST['password'];}



if (!$conn) {
       echo ('Произошла ошибка при подключении к базе данных ' . mysqli_connect_error());
} else {
       echo ('Соединение установленно');
       mysqli_set_charset($conn, "utf8");
       $sql = "INSERT INTO users (name, soname, patronymic, tel, email, password) VALUES ('$userName','$userSoname','$userPatronymic','$userTel','$userEmail','$userPassword')";
       $result = mysqli_query($conn, $sql);
       
       if (!$result) {
              echo ("Произошла ошибка при выполнении запроса ". mysqli_error($conn));
       } else {
              echo ("Данные занесены");
       }
}
mysqli_close($conn);
  
// if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully";
// } else {
//        echo die("Error: (" . mysqli_connect_errno() . "). ".$sql. mysqli_error($conn));
// }
// mysqli_close($conn);
  
?>
