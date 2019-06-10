$rez = "Hello there!"
$success = file_put_contents("hello.txt", $rez);

if ($success === false) {
    alert('Ошибка записи');
}
