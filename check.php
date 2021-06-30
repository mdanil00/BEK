<?php

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($tel)<5) {
    echo "Длина номера недопустима";
    exit();
}
$pass = md5($pass."MdMdMdmD");
$mysql = new mysqli('localhost','root','root','bek');
$mysql->query("INSERT INTO `vhod`(`name`, `tel`, `pass`)
VALUES('$name', '$tel', '$pass')");

$mysql->close();
echo"Вы успешно зарегистрировались!";
return $name->fetch_assoc();


?>