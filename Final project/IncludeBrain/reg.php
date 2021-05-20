<?php
echo "<h2>Your Input:</h2>";
echo $_POST['login'];
echo "<br>";
echo $_POST['pass'];
echo "<br>";
echo $_POST['repeatPass'];
echo "<br>";
echo $_POST['name'];
echo "<br>";
echo $_POST['date'];
echo "<br>";
echo $_POST['phone'];
echo "<br>";
echo $_POST['mail'];
echo "<br>";
echo $_POST['sex'];
echo "<br>";
echo $_POST['status'];
echo "<br>";
//Данные для подключения к серверу MySQL

$servername = "localhost";

$username = "root";

$password = "daveroom1234567";

// Вводим название базы данных

$dbname = "registerforms";

//Созданиие подключения

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_multi_query($conn, 'SET NAMES utf8') or die ("не удалось установить

кодировку");

//Проверка соединения с БД

if (!$conn) {

die("Подключение не выполнено: " . mysqli_connect_error());

}

//Строка с текстом sql запроса для таблицы

$sql = "INSERT INTO register_data (login, pass, pass_control, name, birthday, phone, email, sex, status)

VALUES ('".$_POST['login']."','".$_POST['pass']."',

'".$_POST['repeatPass']."','".$_POST['name']."',

'".$_POST['date']."','".$_POST['phone']."',

'".$_POST['mail']."','".$_POST['sex']."','".$_POST['status']."')" ;

// mysqli_query($conn, $sql) - выполнение sql запроса

//Проверка статуса выполнения sql запроса

if (mysqli_query($conn, $sql)) {

echo "Запись успешно добавлена</br>";

echo "<a href='registr.php'>На главную</a>";

} else {

echo "Ошибка добавления записи: " . $sql . "<br>" .

mysqli_error($conn);

}

//Закрытие соединения

mysqli_close($conn);

?>