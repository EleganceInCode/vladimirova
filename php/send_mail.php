<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $mobile = htmlspecialchars($_POST['Mobile number']);
    $message = htmlspecialchars($_POST['Message...']);

    $to = "elviraw@mail.ru";

    // Тема письма
    $subject = "Сообщение с сайта";

    // Текст письма
    $body = "Имя: $name\nEmail: $email\nТелефон: $mobile\nСообщение:\n$message";

    // Заголовки письма
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный метод отправки.";
}
?>
