<?php  

$servername = "db1.ho.ua";
$username = "webflat";
$password = "Yachuk185429";
$database = "webflat";
$conn = mysqli_connect($servername, $username, $password, $database);

 
if (isset($_POST['tel']))  
{$authTel = $_POST['tel'];}

if (isset($_POST['password']))  
{$authPassword = $_POST['password'];}



if (!$conn) {
       echo ("Произошла ошибка при подключении к базе данных " . mysqli_connect_error());
} else {
       echo ("Соединение установленно");
       mysqli_set_charset($conn, "utf8");
       $sql = "SELECT * FROM users WHERE tel = $authTel AND password = $authPassword";
       $result = mysqli_query($conn, $sql);
       
       if (!$result) {
              $response[error] = "Произошла ошибка при выполнении запроса ". mysqli_error($conn);
       } else {
            $response[status] = 1;
       }
       echo (json_encode($response));
}
mysqli_close($conn);
  
// if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully";
// } else {
//        echo die("Error: (" . mysqli_connect_errno() . "). ".$sql. mysqli_error($conn));
// }
// mysqli_close($conn);
  
?>
