<?php

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']),
FILTER_SANITIZE_STRING);
$komment = filter_var(trim($_POST['komment']),
FILTER_SANITIZE_STRING);

if(mb_strlen($tel)<5) {
    echo "Длина номера недопустима";
    exit();
}
$pass = md5($pass."dimazaz");
$mysql = new mysqli('localhost','root','root','trid');
$mysql->query("INSERT INTO `zakaz`(`name`, `tel`, `komment`)
VALUES('$name', '$tel', '$komment')");

$mysql->close();
echo"Ваша заявка успешно отправлена";
return $name->fetch_assoc();


?>